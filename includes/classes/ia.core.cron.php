<?php
/******************************************************************************
 *
 * Subrion - open source content management system
 * Copyright (C) 2016 Intelliants, LLC <http://www.intelliants.com>
 *
 * This file is part of Subrion.
 *
 * Subrion is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Subrion is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Subrion. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @link http://www.subrion.org/
 *
 ******************************************************************************/

class iaCron extends abstractCore
{
	const C_MINUTE = 1;
	const C_HOUR = 2;
	const C_DOM = 3;
	const C_MONTH = 4;
	const C_DOW = 5;
	const C_CMD = 7;
	const C_COMMENT = 8;
	const C_CRONLINE = 20;

	const ASTERISK = '*';

	protected static $_table = 'cron';


	/**
	 * Execute cron job with the given id (optional)
	 *
	 * @param int $jobId job id
	 *
	 * @return array
	 */
	public function run($jobId = null)
	{
		$this->iaDb->setTable(self::getTable());

		$stmt = is_null($jobId) ? '`active` = 1 AND `date_next_launch` <= UNIX_TIMESTAMP() ORDER BY `date_next_launch`' : iaDb::convertIds($jobId);
		$job = $this->iaDb->row(iaDb::ALL_COLUMNS_SELECTION, $stmt);

		if (!$job)
		{
			return;
		}

		$data = $this->_parse($job['data']);

		if (is_file(IA_HOME . $data[self::C_CMD]))
		{
			if ($this->iaDb->update(array('date_next_launch' => $data['lastScheduled']), iaDb::convertIds($job['id']), array('date_prev_launch' => 'UNIX_TIMESTAMP()')))
			{
				$this->_launchFile($data[self::C_CMD]);
			}
		}
		else
		{
			$this->iaDb->update(array('active' => false), iaDb::convertIds($job['id']));
		}

		$this->iaDb->resetTable();
	}

	/**
	 * Parse string that looks like common cron line
	 *
	 * @param string $aStr string from cron file
	 *
	 * @return array
	 */
	protected function _parse($jobString)
	{
		$regex = '~^([-0-9,/*]+)\\s+([-0-9,/*]+)\\s+([-0-9,/*]+)\\s+([-0-9,/*]+)\\s+([-0-7,/*]+|(-|/|Sun|Mon|Tue|Wed|Thu|Fri|Sat)+)\\s+([^#]*)\\s*(#.*)?$~i';
		if (preg_match($regex, $jobString, $job))
		{
			if ($job[self::C_DOW][0] != self::ASTERISK && !is_numeric($job[self::C_DOW]))
			{
				$job[self::C_DOW] = str_replace(
					array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
					array(0, 1, 2, 3, 4, 5, 6),
					$job[self::C_DOW]);
			}
			$job[self::C_CMD] = trim($job[self::C_CMD]);
			$job[self::C_COMMENT] = isset($job[self::C_COMMENT]) ? trim(substr($job[self::C_COMMENT], 1)) : false;
			$job[self::C_CRONLINE] = $jobString;

			$job['lastScheduled'] = self::_getLastScheduledRunTime($job);
		}

		return $job;
	}

	protected function _launchFile($file)
	{
		ignore_user_abort(1);
		@set_time_limit(0);

		$iaCore = iaCore::instance();
		$iaDb = &$iaCore->iaDb;
		$iaView = &$iaCore->iaView;

		include IA_HOME . $file;
	}

	protected function _getLastScheduledRunTime($job)
	{
		$extjob = array();
		$this->_parseElement($job[self::C_MINUTE], $extjob[self::C_MINUTE], 60);
		$this->_parseElement($job[self::C_HOUR], $extjob[self::C_HOUR], 24);
		$this->_parseElement($job[self::C_DOM], $extjob[self::C_DOM], 31);
		$this->_parseElement($job[self::C_MONTH], $extjob[self::C_MONTH], 12);
		$this->_parseElement($job[self::C_DOW], $extjob[self::C_DOW], 7);

		$dateArr = getdate();
		$minutesAhead = 0;
		while (
			$minutesAhead < 525600 &&
			(!$extjob[self::C_MINUTE][$dateArr['minutes']] ||
			!$extjob[self::C_HOUR][$dateArr['hours']] ||
			(!$extjob[self::C_DOM][$dateArr['mday']] || !$extjob[self::C_DOW][$dateArr['wday']]) ||
			!$extjob[self::C_MONTH][$dateArr['mon']])
		)
		{
			if (!$extjob[self::C_DOM][$dateArr['mday']] || !$extjob[self::C_DOW][$dateArr['wday']])
			{
				self::_incDate($dateArr, 1, 'mday');
				$minutesAhead += 1440;
				continue;
			}

			if (!$extjob[self::C_HOUR][$dateArr['hours']])
			{
				self::_incDate($dateArr, 1, 'hour');
				$minutesAhead += 60;
				continue;
			}

			if (!$extjob[self::C_MINUTE][$dateArr['minutes']])
			{
				self::_incDate($dateArr, 1, 'minute');
				$minutesAhead++;
				continue;
			}
		}

		return mktime($dateArr['hours'], $dateArr['minutes'], 0, $dateArr['mon'], $dateArr['mday'], $dateArr['year']);
	}

	protected function _parseElement($element, &$targetArray, $numberOfElements)
	{
		$subelements = explode(',', $element);
		for ($i = 0; $i < $numberOfElements; $i++)
		{
			$targetArray[$i] = ($subelements[0] == self::ASTERISK);
		}
		$subelements_count = count($subelements);
		for ($i = 0; $i < $subelements_count; $i++)
		{
			if (preg_match('~^(\\*|([0-9]{1,2})(-([0-9]{1,2}))?)(/([0-9]{1,2}))?$~', $subelements[$i], $matches))
			{
				if ($matches[1] == self::ASTERISK)
				{
					$matches[2] = 0; // from
					$matches[4] = $numberOfElements; //to
				}
				elseif (empty($matches[4]))
				{
					$matches[4] = $matches[2];
				}
				if (empty($matches[5]) || $matches[5][0] != "/")
				{
					$matches[6] = 1; // step
				}

				for ($j = self::_leftTrimZeros($matches[2]); $j <= self::_leftTrimZeros($matches[4]); $j += self::_leftTrimZeros($matches[6]))
				{
					$targetArray[$j] = true;
				}
			}
		}
	}

	protected static function _leftTrimZeros($number)
	{
		while ($number[0] == '0')
		{
			$number = substr($number, 1);
		}

		return $number;
	}

	protected static function _incDate(&$dateArr, $amount, $unit)
	{
		if ($unit == 'mday')
		{
			$dateArr['hours'] = 0;
			$dateArr['minutes'] = 0;
			$dateArr['seconds'] = 0;
			$dateArr['mday'] += $amount;
			$dateArr['wday'] += $amount % 7;

			if ($dateArr['wday'] > 6)
			{
				$dateArr['wday'] -= 7;
			}

			$months28 = array(2);
			$months30 = array(4,6,9,11);
			$months31 = array(1,3,5,7,8,10,12);

			if (
				(in_array($dateArr['mon'], $months28) && $dateArr['mday'] == 28) ||
				(in_array($dateArr['mon'], $months30) && $dateArr['mday'] == 30) ||
				(in_array($dateArr['mon'], $months31) && $dateArr['mday'] == 31)
			) {
				$dateArr['mon']++;
				$dateArr['mday'] = 1;
			}

		}
		elseif ($unit == 'hour')
		{
			if ($dateArr['hours'] == 23)
			{
				self::_incDate($dateArr, 1, 'mday');
			}
			else
			{
				$dateArr['minutes'] = 0;
				$dateArr['seconds'] = 0;
				$dateArr['hours']++;
			}
		}
		elseif ($unit == 'minute')
		{
			if ($dateArr['minutes'] == 59)
			{
				self::_incDate($dateArr, 1, 'hour');
			}
			else
			{
				$dateArr['seconds'] = 0;
				$dateArr['minutes']++;
			}
		}
	}
}
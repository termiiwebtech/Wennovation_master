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

$fields = array('zip', 'country', 'state', 'city', 'address', 'latitude', 'longitude');

$items = array('accounts');
$relation = array('accounts' => ''); // item/package relations
$gmap_enabled = explode(',', $iaCore->get('gmap_enable_for'));
$tmp = $iaDb->onefield('items', "`items` != ''", 0, 0, 'extras');

foreach ($tmp as $i)
{
	$i = unserialize($i);
	foreach ($i as $q)
	{
		$items[] = $q['item'];
		$relation[$q['item']] = $q['package'];
	}
}

if (isset($_POST['save']))
{
	$gmap_enabled_old = $gmap_enabled;
	$gmap_enabled = array();
	foreach ($_POST['items'] as $i)
	{
		in_array($i, $items) AND $gmap_enabled[] = $i;
	}
	$iaCore->set('gmap_enable_for', implode(',', $gmap_enabled), true);

	// disable old fields
	foreach ($gmap_enabled_old as $o)
	{
		if (in_array($o, $gmap_enabled)) continue;
		$where = sprintf("`item`='$o' AND `name` IN('%s')", implode("', '", $fields));
		$iaDb->update(array('status' => 'approval'), $where, null, 'fields');
	}

	// build fields
	foreach ($gmap_enabled as $gitem)
	{
		$tbl_field = $iaDb->getKeyValue("SHOW COLUMNS FROM `{$iaDb->prefix}{$gitem}`");
		$tbl_field = array_keys($tbl_field);

		$item_fields = $iaDb->onefield('name', "`item`='$gitem'", 0, 0, 'fields');

		foreach ($fields as $f)
		{
			if (!in_array($f, $tbl_field))
			{
				$iaDb->query("ALTER TABLE `{$iaDb->prefix}{$gitem}` ADD `$f` VARCHAR(50) NOT NULL");
			}

			if (!in_array($f, $item_fields))
			{
				$data = array(
					'name' => $f,
					'item' => $gitem,
					'type' => 'text',
					'length' => 50,
					'status' => 'active',
					'extras' => $relation[$gitem]
				);
				$iaDb->insert($data, false, 'fields');
			}
			else
			{
				$iaDb->update(array('status' => 'active'), "`name`='$f' AND `item`='$gitem'", false, 'fields');
			}
		}
	}
}

$iaView->assign('items', $items);
$iaView->assign('gmap_enabled', $gmap_enabled);
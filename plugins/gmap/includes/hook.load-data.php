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

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	if ($iaView->blockExists('listings_on_map'))
	{
		$params = array(
			'items' => array(),
			'language' => $iaView->language,
			'location' => is_string($iaView->get('location')) ? $iaView->get('location') : null,
			'style' => $iaCore->get('gmap_style')
		);

		if ($listings = $iaView->getValues('listings'))
		{
			foreach ($listings as $listing)
			{
				if (!empty($listing['latitude']) && !empty($listing['longitude']))
				{
					$entry = array(
						'lat' => $listing['latitude'],
						'lng' => $listing['longitude'],

						'title' => isset($listing['title']) ? $listing['title'] : null
					);

					if (is_null($entry['title']))
					{
						empty($listing['venue_title']) || $entry['title'] = $listing['venue_title'];
					}

					$params['items'][] = $entry;
				}
			}
		}

		$params['items'] = iaUtil::jsonEncode($params['items']);

		$iaView->assign('gmap', $params);

		if ('default' != $params['style'])
		{
			$iaView->add_js('_IA_URL_plugins/gmap/js/frontend/styles');
		}
	}
}
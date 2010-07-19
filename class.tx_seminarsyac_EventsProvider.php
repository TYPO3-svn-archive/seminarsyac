<?php
/***************************************************************
* Copyright notice
*
* (c) 2010 Oliver Klee <typo3-coding@oliverklee.de>
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once(t3lib_extMgm::extPath('oelib') . 'class.tx_oelib_Autoloader.php');

/**
 * Class tx_seminarsyac_EventsProvider for the "seminarsyac" extension.
 *
 * This class provides events from the "seminars" extenstion to the "ke_yac"
 * extension.
 *
 * @package TYPO3
 * @subpackage tx_seminarsyac
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class tx_seminarsyac_EventsProvider extends tslib_pibase {
	/**
	 * The constructor.
	 */
	public function __construct() {
		$this->cObj = $GLOBALS['TSFE']->cObj;
	}

	/**
	 * The destructor.
	 */
	public function __destruct() {
		unset($this->cObj);
	}

	/**
	 * Retrieves events and adds them to $events.
	 *
	 * @param integer $start
	 *        start date of the event search as a UNIX timestamp, must be > 0
	 * @param integer $end
	 *        start date of the event search as a UNIX timestamp, must be > 0
	 * @param string $pageUids
	 *        comma-separated list of page on which to search for the events,
	 *        may be empty
	 * @param array $eventData
	 *        the (already filled) list of events, will be modified
	 */
	public function retrieveEvents($start, $end, $pageUids, array &$eventData) {
		$pageUidsExploded = t3lib_div::intExplode(',', $pageUids, TRUE);

		$events = tx_oelib_MapperRegistry::get('tx_seminars_Mapper_Event')
			->findAllByBeginDate($start, $end);
		foreach ($events as $event) {
			if (!empty($pageUidsExploded)
				&& !in_array($event->getPageUid(), $pageUidsExploded)
			) {
				continue;
			}

			$eventData[] = array(
				'hook' => 1,
				'uid' => $event->getUid(),
				'dateuid' => $event->getUid(),
				'startdat' => $event->getBeginDateAsUnixTimestamp(),
				'enddat' => $event->getEndDateAsUnixTimestamp(),
				'fe_group' => 0,
				'title' => $event->getTitle(),
				'datetitle' => $event->getTitle(),
				'teaser' => $event->getTeaser(),
				'image' => '',
			);
		}
	}

	/**
	 * Gets the category UID for all events provided by this provider.
	 *
	 * @return integer category UID, will be > 0 for a correct configuration,
	 *                 will be 0 if not set
	 */
	public function getCategoryUid() {
		return tx_oelib_ConfigurationRegistry::get('plugin.tx_seminarsyac')
			->getAsInteger('categoryUid');
	}

	/**
	 * Creates the URL to the single view of the event with the UID $uid.
	 *
	 * @param integer $uid the UID of an existing event, must be > 0
	 *
	 * @return string the link to the single view
	 */
	public function createSingleViewUrl($uid) {
		$className = (class_exists('tx_seminars_OldModel_Event', TRUE))
			? 'tx_seminars_OldModel_Event' : 'tx_seminars_seminar';


		return tx_oelib_ObjectFactory::make($className, $uid)
			->getDetailedViewUrl($this, FALSE);
	}

	/**
	 * Gets an integer configuration value from the seminars pi1 configuration.
	 *
	 * @param string $key the key of the data to retrieve, must not be empty
	 *
	 * @return integer the data for that key
	 */
	public function getConfValueInteger($key) {
		return tx_oelib_ConfigurationRegistry::get('plugin.tx_seminars_pi1')
			->getAsInteger($key);
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminarsyac/class.tx_seminarsyac_EventsProvider.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminarsyac/class.tx_seminarsyac_EventsProvider.php']);
}
?>
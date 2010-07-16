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
class tx_seminarsyac_EventsProvider {
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminarsyac/class.tx_seminarsyac_EventsProvider.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminarsyac/class.tx_seminarsyac_EventsProvider.php']);
}
?>
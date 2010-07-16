<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_yac']['retrieveEvents'][]
	= 'EXT:seminarsyac/class.tx_seminarsyac_EventsProvider.php:' .
		'&tx_seminarsyac_EventsProvider';
?>
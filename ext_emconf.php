<?php

########################################################################
# Extension Manager/Repository config file for ext "seminarsyac".
#
# Auto generated 16-07-2010 15:49
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'seminars ke_yac connector',
	'description' => 'This extension displays events from the "seminars" extension in the ke_yac calendar.',
	'category' => 'services',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'shy' => '',
	'dependencies' => 'ke_yac,seminars',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'oliverklee.de',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.0-0.0.0',
			'ke_yac' => '',
			'seminars' => '0.9.63',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:9:"ChangeLog";s:4:"aa83";s:39:"class.tx_seminarsyac_EventsProvider.php";s:4:"5acd";s:16:"ext_autoload.php";s:4:"d940";s:12:"ext_icon.gif";s:4:"35fc";s:17:"ext_localconf.php";s:4:"9b77";}',
	'suggests' => array(
	),
);

?>
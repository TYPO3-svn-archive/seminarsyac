<?php

########################################################################
# Extension Manager/Repository config file for ext "seminarsyac".
#
# Auto generated 23-03-2012 17:46
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
	'version' => '0.2.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.0-0.0.0',
			'ke_yac' => '',
			'seminars' => '0.9.63-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"0213";s:39:"class.tx_seminarsyac_EventsProvider.php";s:4:"3b77";s:16:"ext_autoload.php";s:4:"d940";s:12:"ext_icon.gif";s:4:"35fc";s:17:"ext_localconf.php";s:4:"9b77";s:14:"ext_tables.php";s:4:"f3ad";s:34:"Configuration/TypoScript/setup.txt";s:4:"6c89";s:14:"doc/manual.sxw";s:4:"a853";}',
	'suggests' => array(
	),
);

?>
<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "news_ttnewsimport"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'tt_news importer',
	'description' => 'Importer of ext:tt_news items to ext:news',
	'category' => 'be',
	'author' => 'Frans Saris',
	'author_email' => 't3ext@beech.it',
	'company' => 'Beech.it',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '2.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '9.5.0-9.99.99',
			'php' => '5.3.0-0.0.0',
			'news' => '3.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

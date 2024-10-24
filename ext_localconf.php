<?php
defined('TYPO3') or die();

// Register custom indexer.
// Adjust this to your namespace and class name.
// Adjust the autoloading information in composer.json, too!
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \ErnstAbbeHochschuleJena\EahentrepreneurialprojectsIndexer\Indexer\ProjectIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \ErnstAbbeHochschuleJena\EahentrepreneurialprojectsIndexer\Indexer\ProjectIndexer::class;

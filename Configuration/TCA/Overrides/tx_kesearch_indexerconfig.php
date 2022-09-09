<?php
defined('TYPO3_MODE') or die();

// enable "startingpoints_recursive" field
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['startingpoints_recursive']['displayCond'] .= ',tx_eahentrepreneurialprojects_domain_model_project';

// enable "sysfolder" field
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . \ErnstAbbeHochschuleJena\EahentrepreneurialprojectsIndexer\Indexer\ProjectIndexer::KEY;

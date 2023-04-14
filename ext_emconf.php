<?php

/*
 * This file is part of the package ErnstAbbeHochschuleJena/EahentrepreneurialprojectsIndexer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * (c) 2022 Carsten Hoelbing <carsten.hoelbing@eah-jena.de>, Ernst-Abbe-Hochschule Jena
 *
 */

 $EM_CONF[$_EXTKEY] = [
    'title' => 'ke_search indexer for eahentrepreneurialprojects',
    'description' => 'Indexer for ke_search which indexed Eahentrepreneurialprojects records',
    'category' => 'plugin',
    'author' => 'Carsten Hoelbing',
    'author_email' => 'carsten.hoelbing@eah-jena.de',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'ke_search' => '2.5.0-4.99.0',
            'eahentrepreneurialprojects' => '1.1.0-1.2.0',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ErnstAbbeHochschuleJena\\EahentrepreneurialprojectsIndexer\\' => 'Classes',
        ],
    ],
];

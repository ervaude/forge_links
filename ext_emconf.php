<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Forge Links',
    'description' => 'An extension to provide links to forge issues through the Link Wizard. And to demonstrate the usage of a newly introduced hook.',
    'category' => 'FE',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Daniel Goerz',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '>=8.7.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

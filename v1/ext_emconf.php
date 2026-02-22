<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'tsvwartenberg',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Tsvwartenberg\\Tsvwartenberg\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Köhler',
    'author_email' => 'ckoehler99@gmail.com',
    'author_company' => 'tsvwartenberg',
    'version' => '1.0.0',
];

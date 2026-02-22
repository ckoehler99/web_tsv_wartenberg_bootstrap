<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TSV Wartenberg Modern',
    'description' => 'Modernisiertes Sitepackage fuer tsv-wartenberg.de',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Tsvwartenberg\\TsvwartenbergModern\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'version' => '2.0.0',
];

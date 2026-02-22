<?php

/**
 * Extension Manager/Repository config file for ext "tsv_wartenberg_bootstrap".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'tsv-wartenberg-bootstrap',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'TsvWartenberg\\TsvWartenbergBootstrap\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Köhler',
    'author_email' => 'ckoehler@outlook.com',
    'author_company' => 'TSV Wartenberg',
    'version' => '1.0.0',
];

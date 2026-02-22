<?php

/**
 * Extension Manager/Repository config file for ext "tsv_wartenberg_bootstrap_v2".
 * Modernisiertes Design – kann parallel zur v1 installiert werden.
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TSV Wartenberg Bootstrap v2 (Modernisiert)',
    'description' => 'Modernisiertes Sitepackage fuer tsv-wartenberg.de. Kann parallel zur v1 installiert werden – Umschaltung ueber TypoScript Template.',
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
            'TsvWartenberg\\TsvWartenbergBootstrapV2\\' => 'Classes',
        ],
    ],
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Koehler',
    'author_email' => 'ckoehler@outlook.com',
    'author_company' => 'TSV Wartenberg',
    'version' => '2.0.0-beta1',
];

<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'tsv_wartenberg_bootstrap_v2';

    /**
     * Default TypoScript for TsvWartenbergBootstrapV2
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'TSV Wartenberg v2 (Modernisiert)'
    );
});

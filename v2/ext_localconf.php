<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['tsv_wartenberg_bootstrap_v2'] = 'EXT:tsv_wartenberg_bootstrap_v2/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsv_wartenberg_bootstrap_v2/Configuration/TsConfig/Page/All.tsconfig">');

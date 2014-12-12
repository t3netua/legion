<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Site templates');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('legion_site', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('legion_site', 'Content');

//# Add page TSConfig
$pageTsConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/BackendTS/Page/setup.txt');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($pageTsConfig);

# Add user TSConfig
$userTsConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/BackendTS/User/setup.txt');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig($userTsConfig);

$GLOBALS['TYPO3_CONF_VARS']['FluidTYPO3.FluidcontentCore']['variants']['header'][] = 'legion_site';
$GLOBALS['TYPO3_CONF_VARS']['FluidTYPO3.FluidcontentCore']['variants']['textpic'][] = 'legion_site';
$GLOBALS['TYPO3_CONF_VARS']['FluidTYPO3.FluidcontentCore']['variants']['image'][] = 'legion_site';
//$GLOBALS['TYPO3_CONF_VARS']['FluidBT.Fluidbootstraptheme']['variants']['carousel'][] = 'legion_site';

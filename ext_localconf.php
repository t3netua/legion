<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['FluidTYPO3.FluidcontentCore']['types'] = array(
	'header', 'text', 'textpic', 'image', 'bullets', 'uploads', 'table', 'media', 'menu', 'shortcut', 'div', 'html', 'default'
);
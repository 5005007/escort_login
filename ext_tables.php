<?php
/**
 * Created by PhpStorm.
 * User: MaximKashapov
 * Date: 07.07.2016
 * Time: 10:30
 */
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$_EXTKEY = "escort_login";

$TCA['tx_escort_login'] = array (
    'ctrl' => array (
        'title'     => 'escort_login',
        'label'     => 'name',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => array (
            'disabled' => 'hidden',
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY).'tca.php',
        'iconfile'          => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY).'ext_icon.gif',
    ),
);

// Backend module is available only in TYPO3 7.6 or newer
if (version_compare(TYPO3_version, '7.6.0', '>=')) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'MaximKashapov.EscortLogin',
        'web',
        'escort_login',
        '',
        array(
            'Overview' => 'index,edit'
        ),
        array(
            'access' => 'user,group',
            'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY).'ext_icon.gif',
            'labels' => 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf',
        )
    );
}

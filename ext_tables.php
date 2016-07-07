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
        'title'     => 'LLL:EXT:escort/locallang_db.xml:tx_escort_ladies',
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
<?php
/**
 * Created by PhpStorm.
 * User: MaximKashapov
 * Date: 07.07.2016
 * Time: 10:30
 */
// Backend module is available only in TYPO3 7.6 or newer
if (version_compare(TYPO3_version, '7.6.0', '>=')) {
    $_EXTKEY = "escort_login";
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'MaximKashapov.EscortLogin',
        'web',
        $_EXTKEY,
        '',
        array(
            'Account' => 'index'
        ),
        array(
            'access' => 'user,group',
            'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY).'ext_icon.gif',
            'labels' => 'LLL:EXT:escort_login/Resources/Private/Language/locallang.xlf',
        )
    );
}

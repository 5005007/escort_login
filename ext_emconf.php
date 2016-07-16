<?php
/**
 * Created by PhpStorm.
 * User: MaximKashapov
 * Date: 05.07.2016
 * Time: 10:47
 */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Escort For Pleasure Login Module',
    'description' => 'Add possibility to authenticate users.',
    'category' => 'plugin',
    'author' => 'Maxim Kashapov',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearcacheonload' => true,
    'version' => '0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.0.999',
            'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
            'php' => '5.6.0-7.0.999',
        )
    )
);
?>
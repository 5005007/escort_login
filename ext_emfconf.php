<?php
/**
 * Created by PhpStorm.
 * User: MaximKashapov
 * Date: 05.07.2016
 * Time: 10:47
 */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Inventory List',
    'description' => 'An extension to manage a stock.',
    'category' => 'plugin',
    'author' => 'Jochen Rau',
    'author_company' => '',
    'author_email' => '',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearCacheOnLoad' => '1',
    'version' => '0.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '4.3.0-4.3.99',
            'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
        )
    )
);
?>
<?php

$GLOBALS['TCA']['tx_escort_account'] = array (
    'ctrl' => array (
        'title' => 'Login',
        'label' => 'user',
    ),
    'interface' => array (
        'showRecordFieldList' => 'user,pass'
    ),
    'columns' => array(
        'user' => array(
            'label' => 'User name',
            'config' => array(
                'type' => 'none ',
                'size' => '20',
                'eval' => 'trim,required'
            )
        ),
        'pass' => array(
            'label' => 'User password',
            'config' => array(
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            )
        ),
//        'quantity' => array(
//            'label' => 'Stock Quantity',
//            'config' => array(
//                'type' => 'input',
//                'size' => '4',
//                'eval'=> 'int'
//            )
//        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'user, pass')
    )
);
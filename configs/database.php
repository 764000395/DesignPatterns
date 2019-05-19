<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-19
 * Time: 16:49
 */
$config = array(
    'master' => array(
        'type' => 'MySQL',
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'design123',
        'db_name' => 'design',
    ),

    'slave' => array(
        'slave1' => array(
            'type' => 'MySQL',
            'host' => 'localhost',
            'username' => 'root',
            'password' => 'design123',
            'db_name' => 'design',
        ),

        'slave2' => array(
            'type' => 'MySQL',
            'host' => 'localhost',
            'username' => 'root',
            'password' => 'design123',
            'db_name' => 'design',
        ),
    )
);
return $config;
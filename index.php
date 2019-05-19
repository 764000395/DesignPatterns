<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-19
 * Time: 12:23
 */
define("BASEDIR", __DIR__);

require BASEDIR . '/Dd/Loader.php';
spl_autoload_register('\\Dd\\Loader::autoload');

$config = new \Dd\Config(BASEDIR . '/configs');
var_dump($config['controller']);
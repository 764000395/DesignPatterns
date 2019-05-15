<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-14
 * Time: 17:40
 */
namespace Dd;
class Loader
{
    static function autoload($class){
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, BASEDIR . '\\' . $class . '.php');
        if(file_exists($fileName)){
            include "$fileName";
        }else{
            die($fileName . '不存在');
        }
    }
}
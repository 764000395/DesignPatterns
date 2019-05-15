<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 14:08
 */

namespace Dd;


class Factory
{
    static function createDatabase(){
        $db = Databases::getInstance();

        // 工厂方法中生产类的实例的时候将其添加到注册树
        Register::set('db1', $db);

        return $db;
    }
}
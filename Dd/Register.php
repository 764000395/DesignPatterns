<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 14:33
 */

namespace Dd;

/**
 * 注册树模式
 * Class Register
 * @package Dd
 */
class Register
{
    private static $object;

    /**
     * 将对象放到注册到树上
     * @param $alias
     * @param $object
     */
    static function set($alias, $object){
        self::$object[$alias] = $object;
    }

    static function get($alias){
        return self::$object[$alias];
    }

    static function _unset($alias){
        unset(self::$object[$alias]);
    }
}
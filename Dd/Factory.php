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
        return $db;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 11:19
 */

namespace Dd;

class Databases
{
    private static $con;
    private static $num = 0;
    private function __construct()
    {
        self::$con = new \mysqli('localhost', 'design', 'design123', 'design');
    }

    public static function getInstance(){
        if(!self::$con){
            self::$num++;
            new self;
        }
        echo "数据库连接了", self::$num, "次", PHP_EOL;
        return self::$con;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
        trigger_error('Clone is not allowed');
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
        trigger_error('Serialize is not allowed');
    }

    public function query(){

    }
}
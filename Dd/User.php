<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 10:45
 */

namespace Dd;


class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    public function __construct($id)
    {
        $this->id = $id;
        $con = new Mysqli();
    }

    /**
     * 析构函数，对象要销毁时调用
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.

    }

}
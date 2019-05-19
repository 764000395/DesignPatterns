<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-18
 * Time: 14:44
 */

namespace Dd;


class Proxy implements IUserProxy
{
    public function getUserById($id)
    {
        // TODO: Implement getUserById() method.
        echo "从 slave 库中读取数据 id 为{$id}的数据\n";
    }

    public function setUserName($id, $name)
    {
        // TODO: Implement setUserName() method.
        echo "写 master 库中的数据，将 id 为{$id}的用户名字改为{$name}\n";
    }
}
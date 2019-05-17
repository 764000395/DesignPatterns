<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 17:21
 */

namespace Dd;

/**
 * 观察者接口
 * Interface Observe
 * @package Dd
 */
interface Observe
{
    /**
     * 观察这更新的抽象方法
     * @param null $event_info
     * @return mixed
     */
    function update($event_info = null);
}
<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-16
 * Time: 18:02
 */

namespace Dd;

/**
 * 装饰器接口
 * Interface Decorator
 * @package Dd
 */
interface Decorator
{
    function beforeDecorator();
    function afterDecorator();
}
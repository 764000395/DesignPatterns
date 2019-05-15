<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-14
 * Time: 19:53
 */

namespace Dd;

/**
 * 策略接口
 * Interface UserStrategy
 * @package Dd
 */
interface UserStrategy
{
    public function showAd();
    public function showCategory();
}
<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-14
 * Time: 20:03
 */

namespace Dd;


class MaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo '青轴，红轴，电容式键盘';
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '机械键盘酷冷至尊';
    }
}
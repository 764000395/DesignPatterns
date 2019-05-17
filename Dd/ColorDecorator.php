<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-16
 * Time: 18:15
 */

namespace Dd;

/**
 * 颜色装饰器类
 * Class ColorDecorator
 * @package Dd
 */
class ColorDecorator implements Decorator
{
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function beforeDecorator()
    {
        // TODO: Implement beforeDecorator() method.
        echo "<div style='color: {$this->color};'>";
    }

    public function afterDecorator()
    {
        // TODO: Implement afterDecorator() method.
        echo "</div>";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-16
 * Time: 19:33
 */

namespace Dd;

/**
 * size装饰器类
 * Class SizeDecorator
 * @package Dd
 */
class SizeDecorator implements Decorator
{
    protected $size;
    public function __construct($size)
    {
        $this->size = $size;
    }

    public function beforeDecorator()
    {
        // TODO: Implement beforeDecorator() method.
        echo "<p class='font-size: {$this->size}'>\n";
    }

    public function afterDecorator()
    {
        // TODO: Implement afterDecorator() method.
        echo "</p>";
    }
}
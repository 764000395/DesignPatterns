<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 18:15
 */

namespace Dd;


class Canvas
{
    protected $decorators;

    public function __construct()
    {

    }

    public function init(){
        echo '初始化设置画布，假设这个操作很耗费资源。', PHP_EOL;
    }

    public function addDecorator(Decorator $decorator){
        $this->decorators[] = $decorator;
    }

    public function beforeDecorator(){
        foreach($this->decorators as $decorator){
            $decorator->beforeDecorator();
        }
    }

    public function afterDecorator(){
        $decorators = array_reverse($this->decorators);
        foreach($decorators as $decorator){
            $decorator->afterDecorator();
        }
    }

    public function draw($graphics){
        echo '在画布上画图操作,画了个：', $graphics, PHP_EOL;
    }
}
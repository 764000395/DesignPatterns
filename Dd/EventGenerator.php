<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 17:16
 */

namespace Dd;


abstract class EventGenerator
{
    private $observers = [];

    /**
     * 添加观察者
     * @param $observer
     */
    public function addObserver($observer){
        $this->observers[] = $observer;
    }

    /**
     * 通知观察者更新
     */
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}
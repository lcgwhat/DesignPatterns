<?php
/**
 * @author: liuchg
 *
 */

namespace DesignPatterns\Behavior\Strategy;

// 策略模式

/**
 * 比如：有个场景
 *
 * Class Strategy
 * @package DesignPatterns\Behavior\Strategy
 */
abstract class Strategy
{
    /**
     * @param $type
     *
     */
    function getHandler($type){
        switch ($type){
            case 1:

        }
    }
    abstract function sendMsg($user, $msg);
}

<?php
/**
 * @author: liuchg
 *
 */

namespace DesignPatterns\Behavior\Strategy;

// 策略模式

/**
 * 比如：有个场景
 * 用户下单成功，消费超过100元送优惠价
 *            超过200以上送实物
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

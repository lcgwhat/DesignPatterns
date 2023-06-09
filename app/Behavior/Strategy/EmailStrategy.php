<?php
/**
 * @author: liuchg
 *
 */

namespace DesignPatterns\Behavior\Strategy;

use DesignPatterns\User;

/**
 * 邮箱方式发送消息
 * Class EmailStrategy
 * @package DesignPatterns\Behavior\Strategy
 */
class EmailStrategy extends Strategy
{
    /**
     * @param $user User
     * @param $msg
     */
    public function sendMsg($user, $msg)
    {
        // TODO: Implement sendMsg() method.
    }
}

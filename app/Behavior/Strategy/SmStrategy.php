<?php
/**
 * @author: liuchg
 *
 */

namespace DesignPatterns\Behavior\Strategy;


class SmStrategy extends Strategy
{

    function sendMsg($user, $msg)
    {
       echo "发送短线";
    }
}

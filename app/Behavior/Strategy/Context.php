<?php
/**
 * @author: liuchg
 *
 */

namespace DesignPatterns\Behavior\Strategy;


use DesignPatterns\User;

class Context
{

    /**
     * @var Strategy
     */
    private $strategy;
    /**
     * @var $customer User
     */
    protected $customer;
    public function payMoneySuccess(){
        switch ($this->customer->type){
            case User::TYPE_VIP:
                $this->strategy = new EmailStrategy();
                break;
            case User::TYPE_TOURIST:
                $this->strategy = new SmStrategy();
                break;
            default:
                throw new \Exception('类型不存在');
        }
        $this->notify();
    }
    private function notify(){
        $this->strategy->sendMsg($this->customer, '成功支付了');
    }
}

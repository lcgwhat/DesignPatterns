<?php


namespace DesignPatterns\Behavior\demo\strategy;

// 审核策略类
use DesignPatterns\Behavior\demo\po\LeaveForm;

interface AuditStrategy
{
    /**
     * 判断条件是否匹配
     * @param LeaveForm $form
     * @return bool
     */
    public function isSupport(LeaveForm $form):bool;

    /**
     * 审核业务逻辑
     * @param LeaveForm $form
     */
    public function audit(LeaveForm $form):void;

    /**
     * 规则冲突时的优先级
     * @return int
     */
    public function getPriority():int;

    /**
     * 获取规则的名称
     * @return string
     */
    public function getName():string;
}
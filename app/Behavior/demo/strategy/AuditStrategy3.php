<?php


namespace DesignPatterns\Behavior\demo\strategy;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class AuditStrategy3 implements AuditStrategy
{

    /**
     * @inheritDoc
     */
    public function isSupport(LeaveForm $leaveForm): bool
    {
        return $leaveForm->getEmployee()->getLevel() == 9;
    }

    /**
     * @inheritDoc
     */
    public function audit(LeaveForm $form): void
    {
       var_dump("总经理请假无需审批自动通过");
    }

    /**
     * @inheritDoc
     */
    public function getPriority(): int
    {
       return 999;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return "总经理请假无需审批自动通过";
    }
}
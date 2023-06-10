<?php


namespace DesignPatterns\Behavior\demo\strategy;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class AuditStrategy4 implements AuditStrategy
{

    /**
     * @inheritDoc
     */
    public function isSupport(LeaveForm $leaveForm): bool
    {
        return $leaveForm->getDays() == 1 && $leaveForm->getType() == 0;
    }

    /**
     * @inheritDoc
     */
    public function audit(LeaveForm $form): void
    {
        var_dump('一天病假无需审批自动通过');
    }

    /**
     * @inheritDoc
     */
    public function getPriority(): int
    {
        return 0;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return "一天病假无需审批自动通过";
    }
}
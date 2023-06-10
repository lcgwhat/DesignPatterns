<?php


namespace DesignPatterns\Behavior\demo\strategy;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class AuditStrategy5 implements AuditStrategy
{

    /**
     * @inheritDoc
     */
    public function isSupport(LeaveForm $leaveForm): bool
    {
        return $leaveForm->getDays() > 1 && $leaveForm->getType() == 0;
    }

    /**
     * @inheritDoc
     */
    public function audit(LeaveForm $form): void
    {
        var_dump('一天以上病假，进入上级审批流程');
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
        return "一天以上病假，进入上级审批流程";
    }
}
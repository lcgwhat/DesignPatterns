<?php


namespace DesignPatterns\Behavior\demo\strategy;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class AuditStrategy2 implements AuditStrategy
{

    /**
     * @inheritDoc
     */
    public function isSupport(LeaveForm $leaveForm): bool
    {
        return $leaveForm->getDays()>3 && $leaveForm->getType() == 1;
    }

    /**
     * @inheritDoc
     */
    public function audit(LeaveForm $form): void
    {
        var_dump('三天以上婚丧假无进入上级审批流程');
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
       return "三天以上婚丧假无进入上级审批流程";
    }
}
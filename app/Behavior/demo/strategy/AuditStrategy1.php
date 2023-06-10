<?php


namespace DesignPatterns\Behavior\demo\strategy;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class AuditStrategy1 implements AuditStrategy
{

    /**
     * @inheritDoc
     */
    public function isSupport(LeaveForm $leaveForm): bool
    {
        return $leaveForm->getType() == 1 && $leaveForm->getDays()<=3;
    }

    /**
     * @inheritDoc
     */
    public function audit(LeaveForm $form): void
    {
        var_dump('三天以下婚丧假无需审批自动通过');
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
       return "3天以下婚丧假，自动通过";
    }
}
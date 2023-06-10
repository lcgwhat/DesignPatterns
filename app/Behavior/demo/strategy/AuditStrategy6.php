<?php


namespace DesignPatterns\Behavior\demo\strategy;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class AuditStrategy6 implements AuditStrategy
{

    /**
     * @inheritDoc
     */
    public function isSupport(LeaveForm $form): bool
    {
        return $form->getType() == 2;
    }

    /**
     * @inheritDoc
     */
    public function audit(LeaveForm $form): void
    {
        echo "查询年假余额中。。";
        var_dump("审批结束");
    }

    /**
     * @inheritDoc
     */
    public function getPriority(): int
    {
        return 10;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return "年假审批";
    }
}
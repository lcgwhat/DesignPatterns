<?php


namespace DesignPatterns\Behavior\demo;


use DesignPatterns\Behavior\demo\po\LeaveForm;
use DesignPatterns\Behavior\demo\strategy\AuditStrategyFactory;

class LeaveServiceNew
{
    public function audit(LeaveForm $form){
        $factory = AuditStrategyFactory::getInstance();
        $auditStrategy = $factory->getAuditStrategy($form);
         var_dump(111);
        var_dump("符合规则".$auditStrategy->getName().get_class($auditStrategy));
        $auditStrategy->audit($form);
    }
}

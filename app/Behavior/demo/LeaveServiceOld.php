<?php


namespace DesignPatterns\Behavior\demo;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class LeaveServiceOld
{
    public function audit(LeaveForm $leaveForm) {
        // 3天以下婚丧假，自动通过
        if ($leaveForm->getType() == 1 && $leaveForm->getDays()<=3) {
            var_dump('三天以下婚丧假无需审批自动通过');
        }
        if ($leaveForm->getDays()>3 && $leaveForm->getType() == 1) {
            var_dump('三天以上婚丧假无进入上级审批流程');
        }
        if ($leaveForm->getEmployee()->getLevel() == 9) {
            var_dump('总经理请假无需审批自动通过');
        }
        if ($leaveForm->getDays() == 1 && $leaveForm->getType() == 0) {
            var_dump('一天病假无需审批自动通过');
        }
        if ($leaveForm->getDays() > 1 && $leaveForm->getType() == 0) {
            var_dump('一天以上病假，进入上级审批流程');
        }
    }
}
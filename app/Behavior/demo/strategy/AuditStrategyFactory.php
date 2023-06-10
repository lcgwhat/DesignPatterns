<?php


namespace DesignPatterns\Behavior\demo\strategy;


use DesignPatterns\Behavior\demo\po\LeaveForm;

class AuditStrategyFactory
{
    private static ?AuditStrategyFactory $factory = null;




    /**
     * @return AuditStrategy[]
     */
    private function auditStrategyList(){
        return [
            new AuditStrategy1(),
            new AuditStrategy2(),
            new AuditStrategy3(),
            new AuditStrategy4(),
            new AuditStrategy5(),
            new AuditStrategy6(),
        ];
    }
    // 构建了单例的工厂
    public static function getInstance(){
        if (is_null(self::$factory)) {
            self::$factory = new self();
        }
        return self::$factory;
    }

    public function getAuditStrategy(LeaveForm $form):AuditStrategy{
        $auditStrategy = null;
        foreach ($this->auditStrategyList() as $strategy) {
            // 找到匹配的规则
            if ($strategy->isSupport($form)) {
                //如果没有匹配的审批规则，找到匹配直接赋值
                if (is_null($auditStrategy)) {
                    $auditStrategy = $strategy;
                } else {
                    // 如果发现优先级相同的其他规则，直接报错
                    if ($strategy->getPriority() == $auditStrategy->getPriority()) {
                        throw new \Exception('['.$strategy->getName().']:['.$auditStrategy->getName().']的优先级一样');
                    }
                    // 如果发现高优先级的规则替代，现有的规则
                    // 比如：总经理请五天病假，总经理审批规则（999） > 一天以上病假审批规则（0）
                    elseif ($strategy->getPriority() > $auditStrategy->getPriority()) {
                        $auditStrategy = $strategy;
                    } else{

                    }
                }
            }
        }
        if (is_null($auditStrategy)) {
            throw new \Exception('没有对应的规则');
        }

        return $auditStrategy;
    }
}
<?php


namespace DesignPatterns\Behavior\demo\po;

/**
 * 请假单
 * Class LeaveForm
 * @package DesignPatterns\Behavior\demo
 */
class LeaveForm
{
    /**
     * @return Employee
     */
    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @return int
     */
    public function getDays(): int
    {
        return $this->days;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
    private Employee $employee; // 员工
    private string $reason; // 请假原因
    private int $days; // 请假天数
    private int $type; // 类型 0-病假 1-结婚假期 2-年假

    /**
     * LeaveForm constructor.
     * @param Employee $employee
     * @param string $reason
     * @param int $days
     * @param int $type
     */
    public function __construct(Employee $employee, string $reason, int $days, int $type)
    {
        $this->employee = $employee;
        $this->reason = $reason;
        $this->days = $days;
        $this->type = $type;
    }


}
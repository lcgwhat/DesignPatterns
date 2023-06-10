<?php


namespace DesignPatterns\Behavior\demo\po;

/**
 * 员工
 * Class Employee
 * @package DesignPatterns\Behavior\demo
 */
class Employee
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
    /**
     * 员工姓名
     * @var string $name
     */
   private string $name;

    /**
     * 员工等级
     * @var int $level
     */
    private int $level;

    /**
     * @var int
     */
    private int $type;

    /**
     * Employee constructor.
     * @param string $name
     * @param int $level
     */
    public function __construct(string $name, int $level)
    {
        $this->name = $name;
        $this->level = $level;

    }
    public function __toString()
    {
        return "Employee{".
            "name=".$this->name ."\'"
            .",level=".$this->level."}";
    }
}
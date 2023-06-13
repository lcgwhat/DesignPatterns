<?php

namespace DesignPatterns\Behavior\demo\Tests;

use DesignPatterns\Behavior\demo\LeaveServiceNew;
use DesignPatterns\Behavior\demo\po\Employee;
use DesignPatterns\Behavior\demo\po\LeaveForm;
use PHPUnit\Framework\TestCase;

class LeaveServiceNewTest extends TestCase
{
    private LeaveServiceNew $service;
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->service =  new LeaveServiceNew();
        parent::__construct($name, $data, $dataName);
    }

    function testCase1(){

        $form = new LeaveForm(new Employee('李二', 1), '婚嫁', 1, 0);
        $this->service->audit($form);
        var_dump(1);die;
    }
    function testCase(){
        $form = new LeaveForm(new Employee('黄部长', 9), '世家', 10, 2);
        $this->service->audit($form);
        die;
    }
}

<?php

namespace DesignPatterns\Behavior\demo\Tests;

use DesignPatterns\Behavior\demo\LeaveServiceNew;
use DesignPatterns\Behavior\demo\po\Employee;
use DesignPatterns\Behavior\demo\po\LeaveForm;
use PHPUnit\Framework\TestCase;

class LeaveServiceNewTest extends TestCase
{
    private LeaveServiceNew $service;
    protected function setUp(): void
    {
        $this->service =  new LeaveServiceNew();
    }



    function testCase1(){

        $form = new LeaveForm(new Employee('李二', 1), '婚嫁', 1, 0);
        $this->service->audit($form);
       // $this->getActualOutput();
        $this->assertEquals(1,1);
       // var_dump(1);die;
    }
    function testCase(){
        $form = new LeaveForm(new Employee('黄部长', 9), '世家', 10, 2);
        $this->service->audit($form);

       $this->getActualOutput();

      //  die;
    }
}

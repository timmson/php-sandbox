<?php
namespace ru\timmson;

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function testPushAndPop()
    {
        $myClass = new MyClass();

        $this->assertEquals(2, $myClass->sum(1,1));
    }
}
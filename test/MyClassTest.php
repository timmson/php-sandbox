<?php
use PHPUnit\Framework\TestCase;
use ru\timmson\MyClass;

class MyClassTest extends TestCase
{
    public function testPushAndPop()
    {
        $myClass = new MyClass();

        $this->assertEquals(2, $myClass->sum(1,1));
    }
}
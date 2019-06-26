<?php
require 'controllers/Inheritance.php';

use PHPUnit\Framework\TestCase;

class TestInheritance extends TestCase
{

    public function testChest()
    {
        $parts = new Body();

        $this->assertEquals("I have chest", $parts->chest());
    }

    public function testStomach()
    {
        $parts = new Body();

        $this->assertEquals("I have stomach", $parts->stomach());
    }

    public function testEyes()
    {
        $parts = new Body();

        $this->assertEquals("I have eyes", $parts->eyes());
    }

    public function testEars()
    {
        $parts = new Body();

        $this->assertEquals("I have ears", $parts->ears());
    }

}

<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

use DesignPattern\Behavioral\Strategy\Src\MallardDuck;
use PHPUnit\Framework\TestCase;

/**
 * MallardDuck unit test class.
 */
class MallardDuckTest extends TestCase
{
    public function testDisplaySuccess()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am Mallard Duck.', $mallardDuck->display());
    }

    public function testSwimSuccess()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am swimming.', $mallardDuck->swim());
    }

    public function testPerformFlyToFlyWithWings()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am flying.', $mallardDuck->performFly());
    }

    public function testPerformQuackToQuack()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('Quack...quack...quack!', $mallardDuck->performQuack());
    }
}

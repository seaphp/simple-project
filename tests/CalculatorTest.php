<?php
namespace SeaPhp\SimpleProject\Test;

use SeaPhp\SimpleProject\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultResultIsZero()
    {
        $calculator = new Calculator;
        $this->assertEquals(0, $calculator->getResult());
    }

    public function testOperationsAreChainable()
    {
        $calculator = new Calculator;
        $addResult = $calculator->add(0);
        $subtractResult = $calculator->subtract(0);

        $this->assertSame($calculator, $addResult);
        $this->assertSame($calculator, $subtractResult);
    }

    public function testCanAddAndSubtract()
    {
        $result = (new Calculator(5))
            ->add(10)
            ->subtract(3)
            ->getResult();

        $this->assertEquals(12, $result);
    }

    public function testDivideBy()
    {
        $result = (new Calculator(10))
            ->divideBy(2)
            ->getResult();

        $this->assertEquals(5, $result);
    }

    public function testMultiply()
    {
        $result = (new Calculator(10))
            ->multiply(3)
            ->getResult();

        $this->assertEquals(30, $result);
    }

}

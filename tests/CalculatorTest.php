<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Tehrani\CakephpArBootcamp\Calculator;

final class CalculatorTest extends TestCase
{
    private Calculator $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertSame(5, $this->calc->add(2, 3));
    }

    public function testSubtract(): void
    {
        $this->assertSame(1, $this->calc->subtract(3, 2));
    }
}

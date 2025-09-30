<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use function Tehrani\CakephpArBootcamp\add;
use function Tehrani\CakephpArBootcamp\subtract;

final class FunctionsTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertSame(5, add(2, 3));
    }

    public function testSubtract(): void
    {
        $this->assertSame(1, subtract(3, 2));
    }
}

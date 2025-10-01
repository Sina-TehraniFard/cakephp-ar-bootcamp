<?php
declare(strict_types=1);

namespace Tehrani\CakephpArBootcamp;

class Calculator
{
    function add(int $a, int $b): int {
        return $a + $b;
    }

    function subtract(int $a, int $b): int {
        return $a - $b;
    }
}


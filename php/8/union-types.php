<?php

/**
 * Union Types
 *
 * A simple to tell which data types are accepted
 */

/**
 * @param int|float $num1
 * @param int|float $num2
 * @return int|float
 */
function sum(int|float $num1, int|float $num2): int|float
{
    return $num1 + $num2;
}

echo sum(1, 2);

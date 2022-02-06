<?php

/*
 * Wes Kilgour
 *
 * Problem 5
 * Smallest multiple
 *
 * https://projecteuler.net/problem=5
 */

function isEvenlyDivisible($a, $b)
{
    // Return True if $a is evenly divisible by all of the numbers
    // from 1 to $b
    for ($i = 1; $i <= $b; $i++) {
        if ($a % $i != 0) {
            return False;
        }
    }

    return True;
}

$smallestMultiple = 2520;  // must be a multiple of 2520

while (!isEvenlyDivisible($smallestMultiple, 20)) {
    $smallestMultiple += 2520;
}

print $smallestMultiple . PHP_EOL;

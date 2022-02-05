<?php

/*
 * Wes Kilgour
 *
 * Problem 9
 * Special Pythagorean triplet
 *
 * https://projecteuler.net/problem=9
 */

function findTriplet()
{
    // Return product abc where a + b + c = 1000 and a^2 + b^2 = c^2
    for ($a = 1; $a < 1000; $a++) {
        for ($b = 1; $b < 1000; $b++) {
            for ($c = 1; $c < 1000; $c++) {
                if ($a ** 2 + $b ** 2 == $c ** 2 && $a + $b + $c == 1000) {
                    return $a * $b * $c;
                }
            }
        }
    }

    return 0;
}

print findTriplet() . PHP_EOL;

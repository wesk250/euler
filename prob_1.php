<?php

/*
 * Wes Kilgour
 *
 * Problem 1
 * Multiples of 3 or 5
 *
 * https://projecteuler.net/problem=1
 */

$multipleSum = 0;

for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $multipleSum += $i;
    }
}

print $multipleSum . PHP_EOL;

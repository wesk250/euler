<?php

/*
 * Wes Kilgour
 *
 * Problem 2
 * Even Fibonacci numbers
 *
 * https://projecteuler.net/problem=2
 */

$term1 = 0;
$term2 = 1;
$term3 = 1;

$evenSum = 0;

while ($term3 < 4000000) {
    $term1 = $term2;
    $term2 = $term3;
    $term3 = $term1 + $term2;

    if ($term3 % 2 == 0 && $term3 < 4000000) {
        $evenSum += $term3;
    }
}

print $evenSum . PHP_EOL;

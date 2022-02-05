<?php

/*
 * Wes Kilgour
 *
 * Problem 6
 * Sum square difference
 *
 * https://projecteuler.net/problem=6
 */

$sumOfNumbers = 0;
$sumOfSquares = 0;

for ($i = 1; $i < 101; $i++) {
    $sumOfNumbers += $i;
    $sumOfSquares += $i ** 2;
}

$difference = $sumOfNumbers ** 2 - $sumOfSquares;

print $difference . PHP_EOL;

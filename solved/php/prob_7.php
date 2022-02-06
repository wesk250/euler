<?php

/*
 * Wes Kilgour
 *
 * Problem 7
 * 10001st prime
 *
 * https://projecteuler.net/problem=7
 */

function isPrime($n)
{
    // Return True if $n is prime, else False
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return False;
        }
    }

    return True;
}

$primes = [2];
$i = 3;

while (count($primes) < 10001) {
    if (isPrime($i)) {
        $primes[] = $i;
    }

    $i++;
}

print end($primes) . PHP_EOL;

<?php

/*
 * Wes Kilgour
 *
 * Problem 3
 * Largest prime factor
 *
 * https://projecteuler.net/problem=3
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

function getPrimeFactors($n)
{
    // Return array containing prime factors of $n
    $primeFactors = [];

    for ($i = 1; $i <= sqrt($n); $i++) {
        if ($n % $i == 0 && isPrime($i)) {
            $primeFactors[] = $i;
        }
    }

    return $primeFactors;
}

$primeFactors = getPrimeFactors(600851475143);
print end($primeFactors) . PHP_EOL;

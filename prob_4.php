<?php

/*
 * Wes Kilgour
 *
 * Problem 4
 * Largest palindrome product
 *
 * https://projecteuler.net/problem=4
 */

function isPalindrome($n)
{
    // Return True if $n is a palindrome, else False
    $n = strval($n);

    for ($i = 0; $i < strlen($n); $i++) {
        if ($n[$i] != $n[-($i + 1)]) {
            return False;
        }
    }

    return True;
}

$palindromes = [];

for ($i = 100; $i < 1000; $i++) {
    for ($j = 100; $j < 1000; $j++) {
        if (isPalindrome($i * $j)) {
            $palindromes[] = $i * $j;
        }
    }
}

sort($palindromes);
print end($palindromes) . PHP_EOL;

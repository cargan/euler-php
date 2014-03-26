<?php

/* 10001st PRIME
 *
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 *
 * What is the 10 001st prime number?
 *
 *
 */

$primes = [];
for ($i=2;count($primes)<=10001;$i++) {
    if (isPrime($i)) {
        $primes[] = $i;
    }
}

function isPrime($number) {
    for ($i=2;$i<$number;$i++) {
        if (!($number % $i)) {
            return false;
        }
    }
    return true;
}

print_r($primes);

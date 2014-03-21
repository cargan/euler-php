<?php
/* http://projecteuler.net/problem=3
 *
 * Largest prime factor
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of the number 600851475143 ?
 *
 */

$x = 600851475143;
$prime = 0;
for ($i=2; !$prime;$i++) {
    if ($x % $i == 0) {
        var_dump($i);
        if (isPrime($i) && isPrime($x/$i)) {
            $prime = $i;
            var_dump($prime);exit;
        }
    }
}
var_dump($i);

foreach ([3, 5, 7, 9, 8] as $nr) {
    var_dump(isPrime($nr));
}

function isPrime($number) {
    for ($i=2;$i<$number;$i++) {
        if (!($number % $i)) {
            return false;
        }
    }
    return true;
}

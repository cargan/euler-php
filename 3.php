<?php
/* http://projecteuler.net/problem=3
 *
 * Largest prime factor
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of the number 600851475143 ?
 *
 * solution && algorythm: http://math.stackexchange.com/questions/389675/largest-prime-factor-of-600851475143
 */


function isPrime($number) {
    for ($i=2;$i<$number;$i++) {
        if (!($number % $i)) {
            return false;
        }
    }
    return true;
}


$a = 600851475143;
$b = 2;
$c = 0;

while ($b <= $a) {
    if (!($a % $b)) {
        $c = $b;
        $a = $a/$b;
        $b = 2;
    } else {
        $b++;
    }
}
var_dump($c);

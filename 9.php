<?php
/*
 * Special Pythagorean triplet
 *
 *

A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
a2 + b2 = c2

For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.

 */


for ($a=1;$a<1000;$a++ ) {
    for($b=$a;$b<1000;$b++) {
        for($c=$b;$c<1000;$c++) {
            if ($a + $b + $c == 1000) {
                if (pow($a, 2) + pow($b, 2) == pow($c,2)) {
                    var_dump($a, $b, $c, $a*$b*$c);
                exit;
                }
            }
        }

    }
}

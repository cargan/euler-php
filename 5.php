<?php
/*
 * Smallest multiple
 *
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 *
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 *
 */

$numbers = 20;
$number = 10;
while ($number++) {
    for ($i=1;$i<=$numbers;$i++) {
        if ($number % $i) {
            break;
        }
        if ($numbers == $i) {
            var_dump($number);exit;
        }
    }
}

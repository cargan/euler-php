<?php
/*
 * Largest palindrome product
 *
 *
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 *
 *
 */

$results = [];
for($i=999; $i>0;$i--) {
    for($j=999; $j>0;$j--) {
        $it = $j*$i;
        $array  = array_map('intval', str_split($it));
        if (array_reverse($array) == $array) {
            $results[] = $it;
        }
    }
}
var_dump(max($results));

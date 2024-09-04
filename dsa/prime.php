<?php

function isPrime($num) {
    if($num < 2) {
        return false;
    }
    for ($i=2; $i <= sqrt($num) ; $i++) {
        if($num %2 == 0) {
            return false;
        }
    }
    return true;
}

foreach (range(2,20) as $num) {
    if(isPrime($num)) {
        echo $num . " is prime.
        ";
    }
}
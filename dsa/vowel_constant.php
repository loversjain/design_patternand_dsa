<?php

$string = "advanced";
$vowel = ["a", "e", 'i', "o", "u"];
$array = str_split($string);
$constnat = $vowels = [];

foreach ($array as $ar) {
    if (in_array(strtolower($ar), $vowel)) {
        $vowels[] = $ar;
    } else {
        $constnat[] = $ar;
    }
}
print_r($vowels);

print_r($constnat);


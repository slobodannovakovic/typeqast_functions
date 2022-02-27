<?php

declare(strict_types = 1);


//function is extended with additional argument for defining number of wanted repetitions 
function repeat(array $array, int $repeat) : array {
    $array_with_repeated_elements = [];
    
    for($i = 0; $i < $repeat; $i++) {
        for($i2 = 0; $i2 < count($array); $i2++) {
            $array_with_repeated_elements[] = $array[$i2];
        }
    } 

    return $array_with_repeated_elements;
}

print_r(repeat(array: [1,2,3], repeat: 3));
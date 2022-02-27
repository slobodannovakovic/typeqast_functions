<?php

declare(strict_types = 1);

function next_binary_number(array $binary_arr) : array {
    for($i = count($binary_arr) - 1; $i >= 0; $i--) {
        if($binary_arr[$i] === 0) {
            $binary_arr[$i] = 1;
            break;
        } else {
            $binary_arr[$i] = 0;
        }
    }

    return $binary_arr;
}

print_r(next_binary_number([1,0,0,0,0,0,0,0,0,1]));

//1,0,0,0,0,0,0,0,1,0
//test
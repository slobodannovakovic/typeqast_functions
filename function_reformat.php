<?php

declare(strict_types = 1);

function reformat(string $string) : string {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $reformated_string = '';

    for($i = 0; $i < strlen($string); $i++) {
        if(!in_array($string[$i], $vowels)) {
            $reformated_string .= $string[$i];
        }
    }
    return ucfirst(strtolower($reformated_string));
}

echo reformat('TyPEqaSt DeveLoper TeST');
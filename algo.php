<?php

$tabl = [52,-26,1684,3,85,75,83,52,-5,578,-82,87];

function findSmaller($input){
    
    $tailleTabl = count($input);
    $CurrentSmaller = $input[0];

    if ($tailleTabl == 0) {
        return false;
    }

    for ($index = 1; $index < $tailleTabl; $index ++) {
        if ($input[$index] < $CurrentSmaller) {
            $CurrentSmaller = $input[$index];
        }
    }
    return $CurrentSmaller;
}


var_dump($tabl);
var_dump( findSmaller($tabl) );



?>
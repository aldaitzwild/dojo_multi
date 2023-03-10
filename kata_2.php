<?php
/**
 * First In First Out: on enleve d'un tableau une valeur saisi 
 * en piochant dans les premieres case
 * 
 * 
 * -> [4, 4, 4] , 6
 * [0, 2, 4]
 * 
 * -> [3, 3, 3, 3] , 9
 * [0, 0, 0, 3]
 * 
 * -> [8, 8], 2
 * [6, 8]
 */

 function fifo(array $values, int $decrement): array
 {
    $index = 0;
    for ($i=$decrement; $i > 0 ; $i--) { 
        if($values[$index] > 0) {
            $values[$index] -= 1;
        } else {
            $index++;
            $i++;
        }

        echo "-$i\n";
    }

    return $values;
 }

 print_r(
    fifo(
        [4, 4, 4],
        6
    )
 );

 print_r(
    fifo(
        [3, 3, 3, 3],
        9
    )
 );

 print_r(
    fifo(
        [8, 8],
        2
    )
 );

 print_r(
    fifo(
        [4, 0, 4, 4],
        6
    )
 );
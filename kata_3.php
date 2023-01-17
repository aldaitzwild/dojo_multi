<?php
/**
 * ventilate : on enleve d'un tableau une valeur saisi 
 * en piochant dans chaque case du tableau 
 * 
 * 
 * -> [4, 4, 4] , 6
 * [2, 2, 2]
 * 
 * -> [3, 3, 3, 3] , 9
 * [0, 1, 1, 1]
 * 
 * -> [8, 8], 2
 * [7, 7]
 */

 function fifo(array $values, int $decrement): array
 {
    while($decrement > 0) {
        foreach($values as $i => $value) {
            if($values[$i] == 0) continue;

            $values[$i] -= 1;
            $decrement--;

            if($decrement == 0) break;
        }
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
 
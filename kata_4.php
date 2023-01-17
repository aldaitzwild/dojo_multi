<?php
/**
 * Déplacer les lettres en fonctions des ordres passé en paramètres :
 * 
 * 
 * [ ][ ][ ][ ][ ]
 * [ ][A][ ][ ][ ]
 * [ ][ ][ ][ ][ ]
 * [ ][ ][B][ ][ ]
 * [ ][ ][ ][ ][ ]
 * 
 * -> [
 *      '1' => [ '1' => 'A'],
 *      '3' => [ '2' => 'B']
 *    ] , 
 *    [
 *      'A' => ['Haut', 'Droite', 'Droite']
 *      'B' => ['Bas', 'Gauche', 'Gauche']
 *    ]
 * 
 * => [
 *      'O' => [ '3' => 'A'],
 *      '4' => [ '0' => 'B']
 *    ] 
 * 
 */

 function movePoints(array $coordinates, array $moves): array
 {
    $result = [];

    foreach($coordinates as $line => $cols)
    {
        foreach($cols as $col => $cell) {

            foreach($moves[$cell] as $move) {

                switch ($move) {
                    case 'Haut':
                        $line -=1;
                        break;

                    case 'Bas':
                        $line +=1;
                        break;

                    case 'Droite':
                        $col +=1;
                        break;

                    case 'Gauche':
                        $col -=1;
                        break;
                }
            }

            $result["$line"] = ["$col" => $cell];
        }
    }

    return $result;
 }


 $result = movePoints([
          '1' => [ '1' => 'A'],
          '3' => [ '2' => 'B']
       ], 
       [
              'A' => ['Haut', 'Droite', 'Droite'],
              'B' => ['Bas', 'Gauche', 'Gauche'],
            ]
    );

print_r($result);
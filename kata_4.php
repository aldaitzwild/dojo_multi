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

 }
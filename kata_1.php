<?php
/** 
 * Afficher le détails des X et O saisi dans une chaine :
 * 
 * -> XXX
 * Vous avez saisis 3 X.
 * 
 * -> OO
 * Vous avez saisi 2 O.
 * 
 * -> BBB
 * Vous ne pouvez saisir que des X et des O
 * 
 * -> XXAX
 * Vous ne pouvez saisir que des X et des O
 * 
 * ->XXOOO
 * Vous avez saisi 2 X, ainsi que 3 O.
 * 
 * 
 * ->OXXOOOX
 * Vous avez saisi 3 X, ainsi que 4 O.
 */

 function showEnteredDetails(string $entered): string
 {
    $nbX = 0;
    $nbO = 0;

    for ($i=0; $i < strlen($entered); $i++) { 
        $char = $entered[$i];

        if($char == 'X') $nbX++;
        if($char == 'O') $nbO++;
        if($char != 'X' && $char != 'O') return 'Vous ne pouvez saisir que des X et des O.';
    }

    if ($nbX > 0 && $nbO > 0)
        return "Vous avez saisi $nbX X, ainsi que $nbO O.";
    
    if ($nbX > 0)
        return "Vous avez saisis $nbX X.";

    if ($nbO > 0)
        return "Vous avez saisis $nbO O.";
 }


 echo showEnteredDetails('XXX') . "\n\n";
 echo showEnteredDetails('OO') . "\n\n";
 echo showEnteredDetails('BBB') . "\n\n";
 echo showEnteredDetails('XXAX') . "\n\n";
 echo showEnteredDetails('XXOOO') . "\n\n";
 echo showEnteredDetails('OXXOOOX') . "\n\n";

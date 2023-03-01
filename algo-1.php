<?php

function mean($nb1, $nb2) {
    $somme = $nb1 + $nb2;
    $moyenne = $somme / 2;
    return $moyenne;
}

// Exemple avec affichage 

$nombre1 = 5;
$nombre2 = 7;
$moyenne = mean($nombre1, $nombre2);

echo "La moyenne de $nombre1 et $nombre2 est : $moyenne";

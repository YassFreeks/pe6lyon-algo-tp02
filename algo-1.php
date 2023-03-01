<?php

function mean($nb1, $nb2) {
    $somme = $nb1 + $nb2;
    $moyenne = $somme / 2;
    return $moyenne;
}

// Exemple avec affichage 

$nombre1 = 12;
$nombre2 = 20;
$moyenne = mean($nombre1, $nombre2);

echo "La moyenne de $nombre1 et $nombre2 est : $moyenne";

// change les valeur 

// J'ai changer les valeurs 5 et 7 par 12 et 20

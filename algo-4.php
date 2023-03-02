<?php
function sumNIntegers($n) {
  if ($n <= 0) {
    return false;
  }
  $somme = 0;
  for ($i = 1; $i <= $n; $i++) {
    $somme += $i;
  }
  return $somme;
}

// Exemple d'utilisation
var_dump(sumNIntegers(3));
?>

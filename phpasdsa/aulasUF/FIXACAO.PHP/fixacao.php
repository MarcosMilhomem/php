<?php
function elementosPares($vetor) {
  $pares = array();
  foreach ($vetor as $elemento) {
    if ($elemento % 2 == 0) {
      $pares[] = $elemento;
    }
  }
  return $pares;
}
$vetor = array(1, 2, 3, 4, 5, 6, 20, 22, 24, 40);
$pares = elementosPares($vetor);
print_r($pares);
?>

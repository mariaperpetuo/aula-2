<?php

$array = array();
$array[0] = $variavel1;
$array[1] = $variavel2;
$array[2] = $variavel3;
$array[3] = $variavel4;
$array[4] = $variavel5;

echo "<pre>";
var_dump($array);
echo "</pre>";

foreach($array as $indice => $valor) {
  echo "<pre>";
  var_dump([$indice, $valor]);
  echo "</pre>";
}

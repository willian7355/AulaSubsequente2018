<?php
/*
Exercício:Calcular a média aritmética entre 4 notas armazenadas 
no vetor nota.
*/

//1ª forma
/*$nota[0] = 18;
$nota[1] = 58;
$nota[2] = 27;
$nota[3] = 94;*/

//2ª forma
//$nota = array(18, 58,27, 94);

//3ª forma
$nota = array(0 => 18, 1=>58, 2=>27, 3=>94);

$media = ($nota[0] + $nota[1] + $nota[2] + $nota[3]) / 4;

echo "A média aritmética entre as notas $nota[0], $nota[1], $nota[2], 
$nota[3] é igual a $media";
?>
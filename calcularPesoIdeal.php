<?php
$genero = filter_input(INPUT_GET, "genero");
$altura = filter_input(INPUT_GET, "altura");

if($genero == "f") {
	$pesoIdeal = (62.1 * $altura) - 44.7;
}elseif($genero == "m") {
	$pesoIdeal = (72.2 * $altura) - 58;
}
echo "<h2>CÁLCULO DO PESO IDEAL</h2>";
echo "Gênero: $genero";
echo "<br />Altura: $altura";
echo "<br />Peso Ideal = $pesoIdeal";
?>
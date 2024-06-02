<?php
// Obtener los valores del capital, la tasa de interés y el tiempo
$capital = $_POST["capital"];
$tasa = $_POST["tasa"];
$tiempo = $_POST["tiempo"];

// Calcular el interés simple y compuesto
$interesSimple = ($capital * $tasa * $tiempo) / 100;
$interesCompuesto = $capital * pow((1 + ($tasa / 100)), $tiempo) - $capital;

// Mostrar los resultados
echo "El interés simple es: " . $interesSimple . "<br>";
echo "El interés compuesto es: " . $interesCompuesto;
?>
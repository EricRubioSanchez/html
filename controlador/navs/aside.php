<?php

//agafa el arxiu actual en el que esta com a string.
$file = pathinfo($_SERVER['PHP_SELF'])['filename'];

//Ho comprova amb tots els arxius de vista per veure si es troba en algun.

$miEquipoActive = $file == "miEquipo" ? true : false;
$misOfertasActive = $file== "ofertas" ? true : false;
$laLigaActive = $file == "miLiga" ? true : false;
$mercadoActive = $file == "mercado" ? true : false;
$equiposActive = $file == "equipos" ? true : false;
$ojearActive = $file == "ojear" ? true : false;
$partidosActive = $file == "partidos" ? true : false;
$misEquiposActive = $file == "misEquipos" ? true : false;

require_once '../vistas/navs/aside.php';
?>
<?php

//agafa el arxiu actual en el que esta com a string.
$file = pathinfo($_SERVER['PHP_SELF'])['filename'];

//Ho comprova amb tots els arxius de vista per veure si es troba en algun.

$noticiasActive = $file == "index" ? true : false;
$crearFantasyActive = $file== "crearFantasy" ? true : false;
$unirseFantasyActive = $file == "unirseFantasy" ? true : false;
$loginActive = $file == "login" ? true : false;

$perfilActive = $file == "perfil" ? true : false;

require_once '../vistas/navs/header.php';
?>
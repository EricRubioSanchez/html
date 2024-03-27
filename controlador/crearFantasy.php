<?php

use function PHPSTORM_META\type;

require_once("../model/BDD.php");
require_once("../controlador/session.php");

function validarDades($nombre,$desc,$tipo,$fecha,$suplentes,$tipoJug,$permisos,$dinero){
$errors="";
$minData=date('Y-m-d\TH:i', strtotime('+44 hour', time()));
if (empty($nombre)) {
    $errors .= "Nombre vacío. <br>";
}
if (empty($desc)) {
    $errors .= "Descripción vacía. <br>";
}
if ($tipo!="Abierta"&&$tipo!="Cerrada") {
    $errors .= "Error con el tipo de liga. <br>";
}
if(strtotime($fecha)<strtotime($minData)){
    $errors .= "Error con la fecha de inicio de fantasy. <br>";
}
if($suplentes<5||$suplentes>10){
    $errors .= "Error con el numero de suplentes. <br>";
}
if ($tipoJug!="Bases"&&$tipoJug!="Bases Y Custom") {
    $errors .= "Error con el tipo de jugadores. <br>";
}
if ($permisos!="Admin"&&$permisos!="Cualquiera") {
    $errors .= "Error con los permisos de creación de jugadores. <br>";
}
if($dinero<10||$dinero>200){
    $errors .= "Error con el dinero inicial <br>";
}

return $errors;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors ="";
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.
    $nombre = tractarDades($_POST["nombre"]);
    $desc = tractarDades($_POST["desc"]);
    $tipo = tractarDades($_POST["tipo"]);
    $fecha = tractarDades($_POST["fecha"]);
    $suplentes = intval(tractarDades($_POST["suplentes"]));
    $tipoJug = tractarDades($_POST["tipoJug"]);
    $permisos = tractarDades($_POST["permisos"]);
    $dinero = intval(tractarDades($_POST["dinero"]));


    $errors.=validarDades($nombre,$desc,$tipo,$fecha,$suplentes,$tipoJug,$permisos,$dinero);
    

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    if ($errors == "") {
        
    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}

require_once '../vistas/crearFantasy.php';
?>
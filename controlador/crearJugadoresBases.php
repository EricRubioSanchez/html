<?php
require_once("../model/BDD.php");
require_once("../controlador/session.php");

function calcularPuntos($array, $puntosTotales)
{
    $errors = "";
    for ($i = 0; $i < count($array); $i++) {
        $puntosTotales -= intval($array[$i]);
        if(intval($array[$i])<0||intval($array[$i])>100){
            $errors .= "Error con la puntuación. <br>";
            return $errors;
        }
    }
    if ($puntosTotales < 0) {
        $errors .= "Error con la puntuación. <br>";
    }
    return $errors;
}
function crearObjeto($selectPelo, $colorPelo, $selectOjos, $colorOjos, $selectBarba, $colorBarba, $selectAccesorios, $selectBoca, $colorPiel)
{
    $myObj = new stdClass();
    $myObj->pelo = $selectPelo;
    $myObj->colorPelo = $colorPelo;
    $myObj->ojos = $selectOjos;
    $myObj->colorOjos = $colorOjos;
    $myObj->barba = $selectBarba;
    $myObj->colorBarba = $colorBarba;
    $myObj->accesorios = $selectAccesorios;
    $myObj->boca = $selectBoca;
    $myObj->piel = $colorPiel;

    $myJSON = json_encode($myObj);

    return $myJSON;
}


$puntosTotales = 400;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tiroLibre = tractarDades($_POST["tiroLibre"]);
    $tiro2 = tractarDades($_POST["tiro2"]);
    $tiro3 = tractarDades($_POST["tiro3"]);
    $rebotes = tractarDades($_POST["rebotes"]);
    $ast = tractarDades($_POST["ast"]);
    $blk = tractarDades($_POST["blk"]);
    $robos = tractarDades($_POST["robos"]);
    $control = tractarDades($_POST["control"]);

    $errors = "";
    $arrayPuntos=[intval($tiroLibre), intval($tiro2), intval($tiro3), intval($rebotes), intval($ast), intval($blk), intval($robos), intval($control)];

    $errors .= calcularPuntos($arrayPuntos, $puntosTotales);

    $selectPelo = tractarDades($_POST["selectPelo"]);
    $selectOjos = tractarDades($_POST["selectOjos"]);
    $selectBarba = tractarDades($_POST["selectBarba"]);
    $selectAccesorios = tractarDades($_POST["selectAccesorios"]);
    $selectBoca = tractarDades($_POST["selectBoca"]);

    $colorPelo = tractarDades($_POST["pelo"]);
    $colorOjos = tractarDades($_POST["ojos"]);
    $colorBarba = tractarDades($_POST["barba"]);
    $colorPiel = tractarDades($_POST["piel"]);

    $jugadorEstilo = crearObjeto($selectPelo, $colorPelo, $selectOjos, $colorOjos, $selectBarba, $colorBarba, $selectAccesorios, $selectBoca, $colorPiel);

    $selectPos1 = tractarDades($_POST["selectPos1"]);
    $selectPos2 = tractarDades($_POST["selectPos2"]);
    if($selectPos2=="Ninguna"){$selectPos2=null;}
    if ($selectPos1 == $selectPos2) {
        $errors .= "Error con las posiciones del jugador. <br>";
    }
    $nombre = tractarDades($_POST["nombre"]);
    if (empty($nombre)) {
        $errors .= "Nombre vacío. <br>";
    }
    if($errors==""){
        crearJugador($arrayPuntos,$jugadorEstilo,$selectPos1,$selectPos2,$nombre,1);
        header("Location: ../controlador/admin.php");
        exit();
    }
}

require_once '../vistas/crearJugadoresBases.php';

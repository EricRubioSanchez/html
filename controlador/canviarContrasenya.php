<?php

require_once("../model/BDD.php");
require_once("../controlador/session.php");

function validarDadesGET($correu, $token)
{
    $errors = "";
    if (empty($correu)) {
        $errors .= "Correo vacío <br>";
    } elseif (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $errors .= "Correo inválido <br>";
    }
    if (empty($token)) {
        $errors .= "Token vacía <br>";
    } elseif (!comprovarToken($token, $correu)) {
        $errors .= "Token inválido <br>";
    }
    return $errors;
}

function validarDadesPOST($password,$password2){
    $errors="";
    if(empty($password)){
        $errors.="Contraseña vacía <br>";
    }elseif (strlen($password) < 6) {
        $errors .= "Por favor introduce una contraseña de un mínimo de 6 caracteres. <br>";
    }
    if($password!=$password2){
        $errors.="Las contraseñas han de ser iguales <br>";
    }
    return $errors;   
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["correu"])) {
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.
    $errors = "";

    session_start();
    $correu=$_GET["correu"];
    $token=$_GET["token"];
    $_SESSION["correu"]=$correu;
    $_SESSION["token"]=$token;

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors .= validarDadesGET($correu, $token);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.
    $password = tractarDades($_POST["contra1"]);
    $password2 = tractarDades($_POST["contra2"]);

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors .= validarDadesPOST($password, $password2);
    if ($errors == "") {
        if (existeixUsuari($correu)) {
            if (comprovarContrasenya($correu, $password)) {
                //$nom = buscarNombre($correu);
                $admin= esAdmin($correu);
                iniciarSession($correu,$admin);
            } else {
                $errors .= "Autentificación errónea. <br>";
            }
        } else {
            $errors .= "El usuario no existe en la base de datos. <br>";
        }
    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}

require_once '../vistas/canviarContrasenya.php';

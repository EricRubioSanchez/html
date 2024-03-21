<?php

require_once("../model/BDD.php");
require_once("../controlador/session.php");

/**
 * Summary of validarDades
 *      Aqui comprovem que les dades introduides siguin correctes.
 * @param String $correu el correu del usuari.
 * @param String $password la contrasenya del usuari.
 * @return String retorna un string de errors separats per <br>
 */
function validarDades($correu, $password)
{
    $errors = "";
    if (empty($correu)) {
        $errors .= "Correo vacío <br>";
    } elseif (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $errors .= "Correo inválido <br>";
    }
    if (empty($password)) {
        $errors .= "Contraseña vacía <br>";
    } elseif (strlen($password) < 6) {
        $errors .= "Por favor introduce una contraseña de un mínimo de 6 caracteres. <br>";
    }
    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.
    $errors = "";
    $correu = tractarDades($_POST["correo"]);
    $password = tractarDades($_POST["password"]);

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors .= validarDades($correu, $password);
    if ($errors == "") {
        if (existeixUsuari($correu)) {
            if (comprovarContrasenya($correu, $password)) {
                //$nom = buscarNombre($correu);
                $admin= esAdmin($correu);
                $idLiga=buscarLiga($correu);
                $imagen=tieneImagen($correu);
                iniciarSession($correu,$admin,$idLiga,$imagen);
            } else {
                $errors .= "Autentificación errónea. <br>";
            }
        } else {
            $errors .= "El usuario no existe en la base de datos. <br>";
        }
    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}


require_once '../vistas/login.php';

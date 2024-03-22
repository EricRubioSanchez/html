<?php
require_once("../model/BDD.php");
require_once("../controlador/session.php");
session_start();

$nomBD = buscarNombre($_SESSION['correo']);

/**
 * Summary of validarDades
 *      Aqui comprovem que les dades introduides siguin correctes.
 * @param String $nom nom de conte
 * @param String $correu el correu del usuari.
 * @param String $password la contrasenya del usuari.
 * @param String $password2 la contrasenya que l'usuari ha de tornar a introduir per comrpbar que no s'hagi equivocat.
 * @return String retorna un string de errors separats per <br>
 */
function validarDades($nom)
{
    $errors = "";
    if (empty($nom)) {
        $errors .= "Nombre vacío <br>";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $nom)) {
        $errors .= "Nombre inválido <br>";
    }

    return $errors;
}

function validarPassword($password)
{
    $errors = "";
    if (empty($password)) {
        $errors .= "Contraseña vacía <br>";
    } elseif (strlen($password) < 6) {
        $errors .= "Por favor introduce una contraseña de un mínimo de 6 caracteres. <br>";
    }

    return $errors;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.
    $nom = tractarDades($_POST["nombre"]);
    $password = tractarDades($_POST["contra"]);
    $imatge = $_FILES["file"];

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors = validarDades($nom);
    if ($password) {
        $errors .= validarPassword($password);
    }



    if ($errors == "") {
        $correcte = "";
        if ($imatge["size"] > 0) {
            guardarImagen($imatge, $_SESSION['correo']);
            $_SESSION["imagen"] = 1;
            canviarImagen($_SESSION['correo']);
            $correcte .= "Imagen cambiada. <br>";
        }
        if ($password) {
            $passwordENC = password_hash($password, PASSWORD_BCRYPT);
            canviarContrasenya($_SESSION['correo'], $passwordENC);
            $correcte .= "Contraseña cambiada. <br>";
        }
        if ($nom != $nomBD) {
            canviarNombre($_SESSION['correo'], $nom);
            $correcte .= "Nombre cambiado. <br>";
        }
    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}

require_once '../vistas/perfil.php';

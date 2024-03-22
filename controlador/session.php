<?php
//Eric Rubio Sanchez
/**
 * Summary of tractarDades
 *  Aquesta funcio serveix per evitar l'injeccio de codi treient els espais, les '\' i convertint els caracters especial en entitats HTML.
 * @param String $data demana la dada sense tractar
 * @return String retorna la dada tractada
 */
function tractarDades($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Summary of iniciarSession
 *  Inicialitza les variables newsession i nom.
 * @param String $usuari el correu electronic que utilitzem com id.
 * @param String $nom el nom del usuari
 * @return void
 */
function iniciarSession($correo, $admin, $idLiga, $imagen)
{
    ini_set('session.gc_maxlifetime', 1500);
    ini_set('session.cookie-lifetime', 1500);
    session_start();
    $_SESSION["correo"] = $correo;
    $_SESSION["admin"] = $admin;
    $_SESSION["idLiga"] = $idLiga;
    $_SESSION["imagen"] = $imagen;
    header("Location: ../controlador/index.php");
    exit();
}
function guardarImagen($imatge, $correo)
{
    if($imatge["size"] > 0){
        // guardem la imatge a la carpeta de imatges
        $target_dir = "../imagenes/usuarios/";
        $target_file = $target_dir . basename($correo.".png");

        // Si ja exiesteix una imatge amb el mateix nom, canviem el nom de la imatge abans de guardar-la
        
        move_uploaded_file($imatge["tmp_name"], $target_file);
        
    }
}

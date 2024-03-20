<?php 
//Eric Rubio Sanchez
require_once("./controladorMailerPHP.php");
require_once("../model/BDD.php");
require_once("../controlador/session.php");

/**
 * Summary of validarDades
 *      Aqui comprovem que les dades introduides siguin correctes.
 * @param String $correu el correu del usuari.
 * @param String $password la contrasenya del usuari.
 * @return String retorna un string de errors separats per <br>
 */
function validarDades($correu){
    $errors="";
    if(empty($correu)){
        $errors.="Correu buit <br>";
    }elseif (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $errors.= "Correu erroni <br>";
      }
    return $errors; 
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.

    $correu = tractarDades($_POST["correu"]);

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors=validarDades($correu);
    if($errors==""){
        if(existeixUsuari($correu)){
            try{
                //No es pot desencriptar la contrasenya guardada a la base de dades pel tipus d'encriptació
                //Així que li assigno 1234 de contrasenya i que quan entri la canviï.
                $token = generaTokenPass($correu); 
                $url='http://'.$_SERVER["SERVER_NAME"].'/Projecte/FInal/html/controlador/canviarContrasenya.php?correu='.$correu.'&token='.$token;
                $cuerpo="Buenas <br/><br/> Has solicitado un reinicio de contraseña.<br/><br/>Para restaurar la contraseña visita la siguiente dirección: <a href='$url'>$url</a><br/><br/>Este enlace caducará en 2 horas.";
                enviarcorreuPHPMailer($correu,$cuerpo);
            }
            catch(Exception $e){
                $errors.= "Error amb la conexió.<br>";
            }
        }else{
            $errors.= "El usuario no existe en la base de datos. <br>";
        }
        
        

    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}

require_once("../vistas/recuperarContrasenya.php");
?>
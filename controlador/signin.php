<?php 
//Eric Rubio Sanchez
require_once("../model/BDD.php");
require_once("../controlador/session.php");

/**
 * Summary of validarDades
 *      Aqui comprovem que les dades introduides siguin correctes.
 * @param String $nom nom de conte
 * @param String $correu el correu del usuari.
 * @param String $password la contrasenya del usuari.
 * @param String $password2 la contrasenya que l'usuari ha de tornar a introduir per comrpbar que no s'hagi equivocat.
 * @return String retorna un string de errors separats per <br>
 */
function validarDades($nom,$correu,$password,$password2){
    $errors="";
    if(empty($nom)){
        $errors.="Nombre vacío <br>";
    }elseif (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
        $errors.= "Nombre inválido <br>";
      }
    if(empty($correu)){
        $errors.="Correo vacío <br>";
    }elseif (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $errors.= "Correo inválido <br>";
      }
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


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.
    $nom = tractarDades($_POST["nombre"]);
    $correu = tractarDades($_POST["correo"]);
    $password = tractarDades($_POST["contra1"]);
    $password2 = tractarDades($_POST["contra2"]);

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors=validarDades($nom,$correu,$password,$password2);


    if($errors==""){
        $passwordENC = password_hash($password,PASSWORD_BCRYPT);
        if(!existeixUsuari($correu)){
            crearUsuari($nom,$correu,$passwordENC);
            iniciarSession($correu,false);}
        else{
            $errors.="Este correo ya existe en la base de datos.";
        }
        
        

    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}

require_once("../vistas/signin.php");
?>
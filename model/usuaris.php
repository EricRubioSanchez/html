<?php

/**
 * Summary of crearUsuari
 *  Aquesta funcio serveix per crear l'usuari a la base de dades amb la password ja encripatada d'abans.
 * @param String $nom 
 * @param String $correu
 * @param String $password encriptada en enregistrarse.php
 * @return void
 */
function crearUsuari($nom,$correu,$password){
    $conexio=obrirBDD();
      if(!is_null($conexio)){
        $setencia = "INSERT INTO usuaris (nombre, correu, password) VALUES (:nom, :correu, :password)";
        $array=array(':nom' => $nom, ':correu' => $correu, ':password' => $password);
  
        executarSentencia($setencia,$array,$conexio);
  
        $conexio=tancarBDD($conexio);
      }
  }
  
  /**
   * Summary of generaTokenPass
   *  Genera i agrega un token a la base de dades amb una data d'expiració de 2 hores.
   * @param String $correu
   * @return string $token
   */
  function generaTokenPass($correu){
    $conexio=obrirBDD();
      if(!is_null($conexio)){
        $token = bin2hex(openssl_random_pseudo_bytes(16));
  
        $setencia = "UPDATE usuaris  SET reset_token=:token, expires=NOW() + INTERVAL 2 HOUR WHERE correu=:correu";
        $array=array(':token' => $token,':correu' => $correu);
  
        executarSentencia($setencia,$array,$conexio);
  
        $conexio=tancarBDD($conexio);
        return $token;
      }
  }
  /**
   * Summary of comprovarToken
   *  comprova que el token de la pagina web sigui el mateix que el que esta guardat a la base de dades i que no estigui caducat.
   * @param String $correu
   * @param String $token
   * @return void
   */
  function comprovarToken($token,$correu){
    $conexio=obrirBDD();
      if(!is_null($conexio)){
        $sentencia=("UPDATE usuaris  SET reset_token=null, expires=null WHERE expires< NOW();");
        $array=array();
        executarSentencia($sentencia,$array,$conexio);
  
        $setencia = "SELECT COUNT(*) FROM usuaris  WHERE correu=:correu AND reset_token=:token";
        $array=array(':correu' => $correu,':token' => $token);
  
        $result=executarSentencia($setencia,$array,$conexio);
  
        $conexio=tancarBDD($conexio);
        if($result[0]["COUNT(*)"]==1){return true;
  
        }else{return false;}
      }
  }
  /**
   * Summary of existeixUsuari
   *  si existeix l'usuari retorna true
   * @param String $correu
   * @return void
   */
  function existeixUsuari($correu){
  $conexio=obrirBDD();
  if(!is_null($conexio)){
    $setencia = "SELECT COUNT(*) FROM `usuaris` WHERE correu = :correu;";
    $array=array(':correu' => $correu);
  
    $result=executarSentencia($setencia,$array,$conexio);
    $conexio=tancarBDD($conexio);
    if(($result[0]['COUNT(*)'])==0){return false;}
    return true;
  }
  }

   /**
   * Summary of buscarNombre
   *  busca l'usuari per el correu.
   * @param String $correu
   * @return void
   */
  function buscarNombre($correu){
    $conexio=obrirBDD();
    if(!is_null($conexio)){ 

      $setencia = "SELECT nombre FROM `usuaris` WHERE correu = :correu;";
      $array=array(':correu' => $correu);
      $result=executarSentencia($setencia,$array,$conexio);
    
      $conexio=tancarBDD($conexio);
      return $result[0]['nombre'];
    }
  }

  function esAdmin($correu){
    $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia = "SELECT admin FROM `usuaris` WHERE correu = :correu;";
      $array=array(':correu' => $correu);
    
      $result=executarSentencia($setencia,$array,$conexio);
      $conexio=tancarBDD($conexio);
      if(($result[0]['admin'])==0){return false;}
      return true;
    }
  }

  function tieneImagen($correu){
    $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia = "SELECT imagen FROM `usuaris` WHERE correu = :correu;";
      $array=array(':correu' => $correu);
    
      $result=executarSentencia($setencia,$array,$conexio);
      $conexio=tancarBDD($conexio);
      if(($result[0]['imagen'])==0){return false;}
      return true;
    }
  }
  
  
  
  /**
   * Summary of comprovarContrasenya
   * comprovem si la contrasenya que han ficat en el login es la mateixa que la de la base de dades.
   * @param String $usuari el correu del usuari.
   * @param String $password la contrasenya sense encriptar.
   * @return void
   */
  function comprovarContrasenya($correo,$password){
    $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia="SELECT password FROM `usuaris` WHERE correu=:correu;";
      $array=array(':correu' => $correo);
    
      $result=executarSentencia($setencia,$array,$conexio);
      if(empty($result)){return false;}
      if(password_verify($password,$result[0]["password"])){return true;}
      $conexio=tancarBDD($conexio);
    }
  
  }

  /**
 * Summary of canviarContrasenya
 * @param string $correu
 * @param string $password
 * @return void
 */
function canviarContrasenya($correu,$password){
    $conexio=obrirBDD();
    $setencia = "UPDATE usuaris SET password = :contrasenya WHERE correu = :correu ;";
    $array=array(':contrasenya' => $password,':correu' => $correu);
    $result=executarSentencia($setencia,$array,$conexio);
    $conexio=tancarBDD($conexio); 
    
  }
  
  /**
   * Summary of esborrarUsuari
   * @param string $correu
   * @return void
   */
  function esborrarUsuari($correu){
    $conexio=obrirBDD();
    $setencia = 'SELECT id FROM usuaris WHERE correu =:correu';
    $array=array(':correu' => $correu);
    $result=executarSentencia($setencia,$array,$conexio);
    $id=$result[0]["id"];
    //Eliminen primer els articles del usuari.
    $setencia = 'DELETE FROM articles WHERE id_usuari = :userId';
    $array=array(':userId' => $id);
    executarSentencia($setencia,$array,$conexio);
    //I ara al usuari.
    $setencia = 'DELETE FROM usuaris WHERE id = :userId';
    $array=array(':userId' => $id);
    executarSentencia($setencia,$array,$conexio);
    $conexio=tancarBDD($conexio); 
    
  }
  
  function crearUsuariOauth($correu,$nom,$social){
    $conexio=obrirBDD();
      if(!is_null($conexio)){
        $setencia = "INSERT INTO usuaris (nom, correu, social_provider) VALUES (:nom, :correu, :social)";
        $array=array(':nom' => $nom, ':correu' => $correu, ':social' => $social);
  
        $result=executarSentencia($setencia,$array,$conexio);
  
        $conexio=tancarBDD($conexio);
      }
  
  
  }

?>
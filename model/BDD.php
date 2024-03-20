<?php 
//Eric Rubio Sanchez
require_once("env.php");
require_once("usuaris.php");

/**
 * Summary of obrirBDD
 *    Retorna un PDO si s'ha pogut conectar al servidor o un null si no ha pogut conectarse.
 * @return PDO|null
 */	
function obrirBDD() : PDO{
    try {
      // Ens connectem a la base de dades
      //crearem nou objecte PDO (connexió,base_de_dades,usuari,password);
      $connexio = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
      return $connexio;
    } catch(PDOException $e){ //
  
  
      return null;
    }   
    
}

/**
 * Summary of executarSentencia
 *      En aquesta funcio executem les sentencies SQL.
 * @param string $sentencia Sentencia MySQL
 * @param array $array      Array que porta les variables
 * @param PDO $connexio     Conexio a la BDD
 * @return array|false retorna una array per els SELECTS i un false per la resta.
 */
function executarSentencia($sentencia,$array,$connexio){

    // Preparem la consulta SQL
    $statement = $connexio->prepare($sentencia);
  
    // Executem la consulta
    $statement->execute($array);
  
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  
    return $result;
  
}

/**
* Summary of tancarBDD
* @param PDO $connexio
* @return null
*/
function tancarBDD($connexio){
    $connexio=null;
    return $connexio;
    }


/**
 * Summary of crearArticle
 *  Agafa la id en la primera sentencia i en la segona crea l'article.
 * @param String $article
 * @return void
 */
function crearArticle($article){
  $conexio=obrirBDD();
  session_start();
  $_SESSION['newsession'];
  if(!is_null($conexio)){
    $setencia = "SELECT id FROM usuaris WHERE correu=:correu";
    $array=array(':correu' => $_SESSION['newsession']);
    $result=executarSentencia($setencia,$array,$conexio);

    $setencia = "INSERT INTO articles (article, id_usuari) VALUES (:article, :id)";
    $array=array(':article' => $article, ':id' => $result[0]["id"]);

    $result=executarSentencia($setencia,$array,$conexio);
    $conexio=tancarBDD($conexio);
  }
}

/**
 * Summary of autentificacioArticleUsuari
 *  Comprova que l'article sigui del usuari logat.
 * @param string $idArticle
 * @return boolean Si l'article es del usuari retorna true en cas contrari retorna false.
 */
function autentificacioArticleUsuari($idArticle){
  $conexio=obrirBDD();
  session_start();
  $_SESSION['newsession'];
  if(!is_null($conexio)){
    //agafa la id del usuari a partir del correu.
    $setencia = "SELECT id FROM usuaris WHERE correu=:correu";
    $array=array(':correu' => $_SESSION['newsession']);
    $result=executarSentencia($setencia,$array,$conexio);


    //comproba que el article sigui del usuari.
    $setencia = "SELECT COUNT(*) FROM articles WHERE id_usuari=:id_usuari AND id=:id ";
    $array=array(':id_usuari' => $result[0]["id"],':id' => $idArticle);
    $result=executarSentencia($setencia,$array,$conexio);
    $conexio=tancarBDD($conexio);
    if(($result[0]['COUNT(*)'])==0){return false;}
    return true;
  }
}

/**
 * Summary of esborrarArticle
 * @param string $idArticle
 * @return void
 */
function esborrarArticle($idArticle){
  $conexio=obrirBDD();
  $setencia = "DELETE FROM articles WHERE id=:id";
  $array=array(':id' => $idArticle);
  $result=executarSentencia($setencia,$array,$conexio);
  $conexio=tancarBDD($conexio); 
}

/**
 * Summary of modificarArticle
 * @param string $idArticle
 * @param string $article
 * @return void
 */
function modificarArticle($idArticle,$article){
  $conexio=obrirBDD();
  $setencia = "UPDATE articles SET article = :article WHERE id = :id;";
  $array=array(':article' => $article,':id' => $idArticle);
  $result=executarSentencia($setencia,$array,$conexio);
  $conexio=tancarBDD($conexio); 
}




?>
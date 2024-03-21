<?php 

function buscarLiga($correu){
    $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia = "SELECT id FROM `usuaris` WHERE correu = :correu;";
      $array=array(':correu' => $correu);
    
      $result=executarSentencia($setencia,$array,$conexio);


      $setencia = "SELECT id_liga FROM `equipos_fantasy` WHERE id_usuario = :correu;";
      $array=array(':correu' => $result[0]['id']);
    
      $result=executarSentencia($setencia,$array,$conexio);

      if(empty($result)){$result=0;}
      else{$result=$result[0]["id_liga"];}

      $conexio=tancarBDD($conexio);
      return $result;
    }
  }

?>
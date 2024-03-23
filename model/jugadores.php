<?php

function crearJugador($arrayPuntos,$jugadorEstilo,$selectPos1,$selectPos2,$nombre,$original){
    $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia = "INSERT INTO jugadores (original, nombre, pos, 2ndPos, 2pm, ftm, 3pm, reb, ast, stl, blk, TurnOver, imagen) VALUES (:original, :nombre, :pos, :2ndpos, :2pm, :ftm, :3pm, :reb, :ast, :stl, :blk, :TurnOver, :imagen)";
      $array=array(':original' => $original, ':nombre' => $nombre, ':pos' => $selectPos1, ':2ndpos' => $selectPos2, ':2pm' => $arrayPuntos[1], ':ftm' => $arrayPuntos[0], ':3pm' => $arrayPuntos[2], ':reb' => $arrayPuntos[3], ':ast' => $arrayPuntos[4], ':blk' => $arrayPuntos[5], ':stl' => $arrayPuntos[6], ':TurnOver' => 100-intval($arrayPuntos[7]), ':imagen' => $jugadorEstilo);

      executarSentencia($setencia,$array,$conexio);

      $conexio=tancarBDD($conexio);
    }
}

function buscarJugadoresOriginales(){
  $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia = "SELECT id,nombre,pos,2ndPos,2pm,ftm,3pm,reb,ast,stl,blk,TurnOver,imagen FROM `jugadores` WHERE original=1;";
      $array=array();

      $result=executarSentencia($setencia,$array,$conexio);

      $conexio=tancarBDD($conexio);
      return $result;
    }
}

?>
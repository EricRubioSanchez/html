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

function editarJugador($arrayPuntos,$jugadorEstilo,$selectPos1,$selectPos2,$nombre,$original,$id){
  $conexio=obrirBDD();
  if(!is_null($conexio)){
    $setencia = "UPDATE jugadores SET original = :original, nombre = :nombre, pos = :pos, 2ndPos = :2ndpos, 2pm = :2pm, ftm = :ftm, 3pm = :3pm, reb = :reb, ast = :ast, stl = :stl, blk = :blk, TurnOver = :TurnOver, imagen = :imagen WHERE id =:id";
    $array=array(':original' => $original, ':nombre' => $nombre, ':pos' => $selectPos1, ':2ndpos' => $selectPos2, ':2pm' => $arrayPuntos[1], ':ftm' => $arrayPuntos[0], ':3pm' => $arrayPuntos[2], ':reb' => $arrayPuntos[3], ':ast' => $arrayPuntos[4], ':blk' => $arrayPuntos[5], ':stl' => $arrayPuntos[6], ':TurnOver' => 100-intval($arrayPuntos[7]), ':imagen' => $jugadorEstilo,":id" => $id);

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

function buscarJugador($id){
  $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia = "SELECT * FROM `jugadores` WHERE id=$id;";
      $array=array();

      $result=executarSentencia($setencia,$array,$conexio);

      $conexio=tancarBDD($conexio);
      return $result[0];
    }
}

?>
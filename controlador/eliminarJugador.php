<?php
require_once("../model/BDD.php");
require_once("../controlador/session.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = tractarDades($_POST["id"]);
    eliminarJugador($id);
}

?>
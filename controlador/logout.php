<?php
//Desloga i retorna a la pagina de articles.
session_start();
session_destroy();
header("Location: ../controlador/index.php");
exit();
?>
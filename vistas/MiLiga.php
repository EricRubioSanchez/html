<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../estils/headerAside.css">
    <link rel="stylesheet" href="../estils/estilosBasicos.css">
    <title>Document</title>
</head>

<body>
<?php session_start();
     include_once("./navs/header.php");
     if ($_SESSION['idLiga']!=0){
    include_once("./navs/aside.php");} ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container">
        <div class="articulo text-white container" style="width: 62.9375rem; margin:auto;margin-top: 10vh;margin-bottom: 4vh;">
            <div class="row">
                <div class="col col-12">
                    <h1>Tu Liga</h1>
                </div>
            </div>
            <div class="row">
                <div class="col col-12">Liga creada por Eric Rubio Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, saepe mollitia perferendis praesentium accusamus suscipit et qui voluptatibus</div>
            </div>
        </div>

        <div class="articulo text-white container" style="width: 62.9375rem; margin:auto;margin-top: 3vh;">
            <div class="row">
                <div class="col col-9 col-sm-8">
                    <div class="row">
                        <div class="col col-12">
                        <h2>Draft</h2>
                        </div>
                        <div class="col col-12">
                        Draft 28/03/2024 a las 17:00
                    </div>
                    </div>
                </div>
                <div class="col col-3 col-sm-4 text-end" style="margin: auto;">
                    <button class="boton" style="width: 80%;">Unirse Draft</button>
                </div>
            </div>
        </div>

        <div class="articulo text-white container" style="width: 62.9375rem; margin:auto;margin-top: 3vh;">
            <div class="row">
                <div class="col col-9 col-sm-8">
                    <div class="row">
                        <div class="col col-12">
                        <h2>Crear Jugadores</h2>
                        </div>
                        <div class="col col-12">
                        Liga creada por Eric Rubio Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, saepe mollitia perferendis praesentium accusamus suscipit et qui voluptatibus
                        </div>
                    </div>
                </div>
                <div class="col col-3 col-sm-4 text-end" style="margin: auto;">
                    <button class="boton" onclick="window.location='./verJugadoresCustom.php';"style="width: 80%;">Crear Jugadores</button>
                </div>
            </div>
        </div>

        <div class="articulo text-white container" style="width: 62.9375rem; margin:auto;margin-top: 3vh;">
            <div class="row">
                <div class="col col-9 col-sm-8">
                    <div class="row">
                        <div class="col col-12">
                        <h2>Código de invitación</h2>
                        </div>
                        <div class="col col-12">
                        Código de invitación: 178509</div>
                    </div>
                </div>
                <div class="col col-3 col-sm-4 text-end" style="margin: auto;">
                    <button class="boton" style="width: 80%;">Copiar</button>
                </div>
            </div>
        </div>
        
    </main>
</body>

</html>
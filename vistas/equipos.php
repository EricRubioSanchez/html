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
     if (isset($_SESSION['idLiga'])&&$_SESSION['idLiga'] != 0) {
        include_once("./navs/aside.php");
    } ?>
    <main class="main align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container-fluid" style="max-width: 62.9375rem; margin:auto;margin-top: 14vh;min-width:28rem;">
        <a href="../vistas/miEquipo.php" class="nav-link link-light" >
            <div class="row">
                <div class="col col-2 col-md-2 col-xl-1">
                <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                </div>
                <div class="col col-xxl-8 col-xl-8 col-md-6 col-sm-6 col-6 mt-2 ms-4 text-start">
                    <div class="row">
                        <div class="col col-12">
                            <h2>Equipo 1</h2>
                        </div>
                        <div class="col col-12">
                            <h5>Eric Rubio Sanchez</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-2 text-end" style="margin:auto">
                    <h4>PTS 70</h4>
                </div>
            </div>
        </a>
        </div>
        <div class="articulo text-white container-fluid" style="max-width: 62.9375rem; margin:auto;margin-top: 3vh;min-width:28rem;">
        <a href="../vistas/equipoRival.php" class="nav-link link-light" >
            <div class="row">
                <div class="col col-2 col-md-2 col-xl-1">
                <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                </div>
                <div class="col col-xxl-8 col-xl-8 col-md-6 col-sm-6 col-6 mt-2 ms-4 text-start">
                    <div class="row">
                        <div class="col col-12">
                            <h2>Equipo 2</h2>
                        </div>
                        <div class="col col-12">
                            <h5>Dani Torres</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-2 text-end" style="margin:auto">
                    <h4>PTS 70</h4>
                </div>
            </div>
        </a>
        </div>
    </main>
</body>

</html>
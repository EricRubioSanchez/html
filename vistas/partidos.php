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
        <div class="articulo text-white container-fluid" style="max-width: 82.9375rem; margin:auto;margin-top: 13vh;">
            <div class="row mt-2">
                <div class="col col-4 me-5">
                    <div class="row">
                        <div class="col col-12 ms-1">
                            <h2>Partidos</h2>
                        </div>
                        <div class="col col-12 mt-2">
                            <div class="btn-group dropbox">
                                <button type="button" class="boton dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jornadas
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Jornada 1</a></li>
                                    <li><a class="dropdown-item" href="#">Jornada 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-7 ms-5" style="margin: auto;">
                    <h1>Jornada 1</h1>
                </div>
            </div>
        </div>
        <div class="text-white container-fluid justify-content-center" style="max-width: 82.9375rem; margin:auto;margin-top: 3vh;">
            <div class="row justify-content-around ">
                <div class="articulo mx-2 my-2 col col-lg-6 col-12" style="max-width: fit-content;">
                    <div class="row">
                        <div class="col col-12">
                            <div class="row">
                                <div class="col col-5" style="display: flex;">
                                    <div>
                                        <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                    </div>
                                    <div class="ms-2" style="margin: auto;">
                                        <h3>103</h3>
                                    </div>
                                </div>
                                <div class="col col-2 text-center" style="margin: auto;">
                                    VS
                                </div>
                                <div class="col col-5" style="display: flex;">
                                <div class="me-2" style="margin: auto;">
                                        <h3>103</h3>
                                    </div>
                                    <div class="me-4">
                                        <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-4">
                                    <h4>Equipo 1</h4>
                                </div>
                                <div class="col col-4 text-center">
                                    <button onclick="window.location='./detalles.php';" class="boton">Detalles</button>
                                </div>
                                <div class="col col-4 text-end">
                                    <h4>Equipo 2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articulo mx-2 my-2 col col-lg-6 col-12" style="max-width: fit-content;">
                    <div class="row">
                        <div class="col col-12">
                            <div class="row">
                                <div class="col col-5" style="display: flex;">
                                    <div>
                                        <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                    </div>
                                    <div class="ms-2" style="margin: auto;">
                                        <h3>103</h3>
                                    </div>
                                </div>
                                <div class="col col-2 text-center" style="margin: auto;">
                                    VS
                                </div>
                                <div class="col col-5" style="display: flex;">
                                <div class="me-2" style="margin: auto;">
                                        <h3>103</h3>
                                    </div>
                                    <div class="me-4">
                                        <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-4">
                                    <h4>Equipo 1</h4>
                                </div>
                                <div class="col col-4 text-center">
                                    <button onclick="window.location='./detalles.php';" class="boton">Detalles</button>
                                </div>
                                <div class="col col-4 text-end">
                                    <h4>Equipo 2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articulo mx-2 my-2 col col-lg-6 col-12" style="max-width: fit-content;">
                    <div class="row">
                        <div class="col col-12">
                            <div class="row">
                                <div class="col col-5" style="display: flex;">
                                    <div>
                                        <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                    </div>
                                    <div class="ms-2" style="margin: auto;">
                                        <h3>103</h3>
                                    </div>
                                </div>
                                <div class="col col-2 text-center" style="margin: auto;">
                                    VS
                                </div>
                                <div class="col col-5" style="display: flex;">
                                <div class="me-2" style="margin: auto;">
                                        <h3>103</h3>
                                    </div>
                                    <div class="me-4">
                                        <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-4">
                                    <h4>Equipo 1</h4>
                                </div>
                                <div class="col col-4 text-center">
                                    <button onclick="window.location='./detalles.php';" class="boton">Detalles</button>
                                </div>
                                <div class="col col-4 text-end">
                                    <h4>Equipo 2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
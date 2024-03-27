<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../estils/headerAside.css">
    <link rel="stylesheet" href="../estils/estilosBasicos.css">
    <link rel="stylesheet" href="../estils/tablas.css">
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
                <div class="col col-12">
                    <div class="row">
                        <div class="col col-5" style="display: flex;">
                            <div class="me-4 col col-6">
                                <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                            </div>
                            <div class="ms-2 col col-6 text-end" style="margin: auto;">
                                <h1>103</h1>
                            </div>
                        </div>
                        <div class="col col-2 text-center" style="margin: auto;">
                            <h2>VS</h2>
                        </div>
                        <div class="col col-5" style="display: flex;">
                            <div class="me-2 col col-6" style="margin: auto;">
                                <h1>103</h1>
                            </div>
                            <div class="me-4 col col-6 text-end">
                                <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-5">
                            <h3>Equipo 1</h3>
                        </div>
                        <div class="col col-2 text-center">
                            <h4>Jornada 1</h4>
                        </div>
                        <div class="col col-5 text-end">
                            <h3>Equipo 2</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container jugadores mt-4">
            <div class="row">
                <div class="col col-6 ">
                    <div class="me-2 articulo row">
                        <div class="col col-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><img style="width: 4rem;" src="../imagenes/mii.png"></td>
                                        <td>JarretAllen</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td><img style="width: 4rem;" src="../imagenes/mii.png"></td>
                                        <td>JarretAllen</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td><img style="width: 4rem;" src="../imagenes/mii.png"></td>
                                        <td>JarretAllen</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col col-6">
                    <div class="ms-2 articulo row">
                        <div class="col col-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>4</td>
                                        <td>JarretAllen</td>
                                        <td><img style="width: 4rem;" src="../imagenes/mii.png"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>JarretAllen</td>
                                        <td><img style="width: 4rem;" src="../imagenes/mii.png"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>JarretAllen</td>
                                        <td><img style="width: 4rem;" src="../imagenes/mii.png"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
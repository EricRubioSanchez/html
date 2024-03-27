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
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                let dateInput = document.getElementById("dataStart");
                let dataAvui= new Date();
                let dataDema =(new Date(dataAvui.getTime() + 86400000));
                dateInput.min = dataDema.toISOString().slice(0,dataDema.toISOString().lastIndexOf(":"));
                
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

    </script>
</head>

<body>
    <?php session_start();
    include_once("./navs/header.php");
    if (isset($_SESSION['idLiga'])&&$_SESSION['idLiga'] != 0) {
        include_once("./navs/aside.php");
    } ?>

    <?php if (isset($errors) && ($errors != "")) : ?>
        <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert" style="position:absolute; margin-top:15vh; margin-left:28%">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin: auto;" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
            </svg>
            <div> <?php echo ($errors) ?> </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container">
        <div class="articulo text-white container" style="max-width: 82.9375rem; margin:auto;margin-top: 13vh;">

            <form class="needs-validation px-4 " novalidate method="POST" action="../controlador/crearFantasy.php">
                <h1>Crear Fantasy</h1>
                <div class="row">
                    <div class="col col-xxl-6 col-12">
                        <div class="form-group mb-3">
                            <label for="nombreLiga">Nombre de la Liga</label>
                            <input required type="text" class="form-control" <?php if (isset($nombre)) {
                                                                                    echo ("value='" . $nombre . "'");
                                                                                } ?> id="nombreLiga" name="nombre" placeholder="Name">
                            <div class="invalid-feedback">
                                Por favor selecciona un nombre para la liga.
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="descLiga">Descripción de la Liga</label>
                            <textarea required type="text" name="desc" class="form-control" id="descLiga" style="height: 2rem;" placeholder="Name">
<?php if (isset($desc)) {echo ($desc);} ?></textarea>
                            <div class="invalid-feedback">
                                Por favor selecciona un nombre para la liga.
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tipoLiga" aria-describedby="tipoHelp">Tipo de Liga</label>
                            <select id="tipoLiga" name="tipo" class="form-select">
                                <option <?php if(isset($tipo)&&$tipo=="Cerrada"){echo("selected");} ?>>Cerrada</option>
                                <option <?php if(isset($tipo)&&$tipo=="Abierta"){echo("selected");} ?> >Abierta</option>
                            </select>
                            <small id="tipoHelp" class="form-text text-info">A las ligas abiertas se podrá unir cualquier persona, mientras que las ligas cerradas solo se podrán unir por código.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="dataStart">Fecha y Hora del Comienzo del Fantasy</label>
                            <input required type="datetime-local" <?php if (isset($fecha)) {echo ("value='" . $fecha . "'");} ?> name="fecha" class="form-control" id="dataStart">
                            <div class="invalid-feedback">
                                Por favor selecciona una fecha y hora para el comienzo del fantasy.
                            </div>
                        </div>
                    </div>
                    <div class="col col-xxl-6 col-12">
                        <div class="form-group mb-3">
                            <label for="maxSup">Número Màximo de Suplentes</label>
                            <input class="form-control" name="suplentes" type="number" id="maxSup" min=5 max=10 <?php if(isset($suplentes)){ echo("value='".$suplentes."'");}else{echo("value='10'");} ?> >
                        </div>
                        <div class="form-group mb-3">
                            <label for="dinero">Dinero Inicial</label>
                            <input class="form-control" name="dinero" type="number" id="dinero" min=10 max=200 <?php if(isset($dinero)){ echo("value='".$dinero."'");}else{echo("value='100'");} ?>>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tipoJugadores" aria-describedby="tipoJugHelp">Tipo de Jugadores</label>
                            <select id="tipoJugadores" name="tipoJug" class="form-select">
                                <option <?php if(isset($tipoJug)&&$tipoJug=="Bases"){echo("selected");} ?>>Bases</option>
                                <option <?php if(isset($tipoJug)&&$tipoJug=="Bases y Custom"){echo("selected");} ?>>Bases y Custom</option>
                            </select>
                            <small id="tipoJugHelp" class="form-text text-info">Los jugadores bases son los que vienen creados por defecto y los custom son los creados por los usuarios.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="permisos">Permisos de Creación de Jugadores.</label>
                            <select id="permisos" name="permisos" class="form-select">
                                <option <?php if(isset($permisos)&&$permisos=="Admin"){echo("selected");} ?>>Admin</option>
                                <option <?php if(isset($permisos)&&$permisos=="Cualquiera"){echo("selected");} ?>>Cualquiera</option>
                            </select>
                        </div>
                    </div>
                    <button class="boton" type="submit" style="width: -webkit-fill-available;height: 3.4rem;">Enviar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
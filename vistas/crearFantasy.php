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
    <?php include_once("./navs/header.php");
    include_once("./navs/aside.php") ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container">
        <div class="articulo text-white container" style="max-width: 82.9375rem; margin:auto;margin-top: 20vh;">

            <form class="needs-validation px-4 " novalidate>
                <h1>Crear Fantasy</h1>
                <div class="row">
                    <div class="col col-xxl-6 col-12">
                        <div class="form-group mb-3">
                            <label for="nombreLiga">Nombre de la Liga</label>
                            <input required type="text" class="form-control" id="nombreLiga" placeholder="Name">
                            <div class="invalid-feedback">
                                Por favor selecciona un nombre para la liga.
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="descLiga">Descripción de la Liga</label>
                            <textarea required type="text" class="form-control" id="descLiga" style="height: 2rem;" placeholder="Name"></textarea>
                            <div class="invalid-feedback">
                                Por favor selecciona un nombre para la liga.
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tipoLiga" aria-describedby="tipoHelp">Tipo de Liga</label>
                            <select id="tipoLiga" class="form-select">
                                <option selected>Cerrada</option>
                                <option>Abierta</option>
                            </select>
                            <small id="tipoHelp" class="form-text text-info">A las ligas abiertas se podrá unir cualquier persona, mientras que las ligas cerradas solo se podrán unir por código.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="dataDraft">Fecha y Hora del Draft</label>
                            <input required type="datetime-local" class="form-control" id="dataDraft">
                            <div class="invalid-feedback">
                                Por favor selecciona una fecha y hora para el draft.
                            </div>
                        </div>
                    </div>
                    <div class="col col-xxl-6 col-12">
                        <div class="form-group mb-3">
                            <label for="maxSup">Número Màximo de Suplentes</label>
                            <input class="form-control" type="number" id="maxSup" min=5 max=10 value="10">
                        </div>
                        <div class="form-group mb-3">
                            <label for="dinero">Dinero Inicial</label>
                            <input class="form-control" type="number" id="dinero" min=10 max=200 value="100">
                        </div>
                        <div class="form-group mb-2">
                            <label for="tipoJugadores" aria-describedby="tipoJugHelp">Tipo de Jugadores</label>
                            <select id="tipoJugadores" class="form-select">
                                <option selected>Bases</option>
                                <option>Bases y Custom</option>
                            </select>
                            <small id="tipoJugHelp" class="form-text text-info">Los jugadores bases son los que vienen creados por defecto y los custom son los creados por los usuarios.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="permisos">Permisos de Creación de Jugadores.</label>
                            <select id="permisos" class="form-select">
                                <option selected>Admin</option>
                                <option>Cualquiera</option>
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
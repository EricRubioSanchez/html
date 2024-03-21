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

        function canviarContra() {
            var x = document.getElementById("contra");
            let boton = document.getElementById("botonContra");
            if (x.type === "password") {
                x.type = "text";
                boton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" alt="ojoTachado" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16"><path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/><path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/></svg>';
            } else {
                x.type = "password";
                boton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" alt="ojo" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" /><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" /></svg>';
            }
        }
    </script>
</head>

<body>
<?php session_start();
     include_once("./navs/header.php");
     if ($_SESSION['idLiga']!=0){
    include_once("./navs/aside.php");} ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container" style="width: 66.4rem; margin-top: 17vh;">
            <form class="needs-validation px-4 " novalidate>
                <div class="row">
                    <div class="col col-12">
                        <h1>Perfil</h1>
                    </div>
                    <div class="col col-4 text-center">
                        <img class="imagen " style="width: 18rem;" src="../imagenes/mii.png">
                    </div>
                    <div class="col col-8">
                        <div class="row">
                            <div class="col col-6">
                                <div class="form-group mb-5 mt-5">
                                    <label for="nombre">Nombre Completo</label>
                                    <div class="row">

                                        <input required type="text" style="width:20rem;" class="form-control ms-2" id="nombre" value="Eric Rubio Sanchez">

                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor selecciona un nombre para el equipo.
                                    </div>
                                </div>
                                <div class="form-group mb-3 mt-5">
                                    <label for="contra">Contraseña</label>
                                    <div class="input-group mb-3">
                                        <input required type="password" style="width:16rem;" class="form-control " id="contra" value="P@ssw0rd">
                                        <div class="input-group-append">
                                            <button onclick="canviarContra()" id="botonContra" class="btn btn-danger pb-1" style="min-height:0px;" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                </svg></button>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor una contraseña valida.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-4 mt-3 text-center">
                        <input class="boton" type="button" value="Cambiar Logo" onclick="document.getElementById('selectedFile').click();" style="height: 3.4rem;width:15rem;" />
                        <input type="file" id="selectedFile" accept="image/png" ; style="display: none;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 text-end mt-2">
                        <button class="boton" type="button" style="height: 3.4rem;width:15rem;">Eliminar Perfil</button>
                    </div>
                    <div class="col col-12 text-end mt-2">
                        <button class="boton" type="submit" style="height: 3.4rem;width:15rem;">Guardar Cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
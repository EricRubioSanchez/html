<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../estils/headerAside.css">
    <link rel="stylesheet" href="../estils/estilosBasicos.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script defer src="../js/perfil.js"></script>
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
    <?php
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

    <?php if (isset($correcte) && ($correcte != "")) : ?>
        <div class="alert alert-success d-flex alert-dismissible fade show" role="alert" style="position:absolute; margin-top:15vh; margin-left:28%">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin: auto;" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <div> <?php echo ($correcte) ?> </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container" style="width: 66.4rem; margin-top: 17vh;">
            <form class="needs-validation px-4 " novalidate method="POST" action="../controlador/perfil.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col col-6">
                        <h1>Perfil</h1>
                    </div>
                    <div class="col col-6 text-end">
                        <button class="boton" type="button" style="height: 3.4rem;width:15rem;">Eliminar Perfil</button>
                    </div>
                    <div class="col col-4 text-center">
                        <img class="imagen " id="imagen" style="width: 18rem;" src=<?php if ($_SESSION['imagen'] != 0) {
                                                                                        echo ('"../imagenes/usuarios/' . $_SESSION['correo'] . '.png"');
                                                                                    } else {
                                                                                        echo ('"../imagenes/default.png"');
                                                                                    } ?>>
                    </div>
                    <div class="col col-8">
                        <div class="row">
                            <div class="col col-6">
                                <div class="form-group mb-5 mt-5">
                                    <label for="nombre">Nombre Completo</label>
                                    <div class="row">

                                        <input required type="text" style="width:20rem;" name="nombre" class="form-control ms-2" id="nombre" placeholder="Name" <?php if (isset($nom)) {
                                                                                                                                                                    echo ("value='" . $nom . "'");
                                                                                                                                                                } else {
                                                                                                                                                                    echo ("value='" . $nomBD . "'");
                                                                                                                                                                } ?>>

                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor selecciona un nombre para el equipo.
                                    </div>
                                </div>
                                <div class="form-group mb-3 mt-5">
                                    <label for="contra">Contraseña</label>
                                    <div class="input-group mb-3">
                                        <input type="password" minlength="6" name="contra" style="width:16rem;" class="form-control " id="contra" placeholder="P@ssw0rd">
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
                        <input type="file" name="file" id="selectedFile" accept="image/png" ; style="display: none;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 text-end mt-2">
                        <button class="boton" id="cancelar" type="reset" style="height: 3.4rem;width:15rem;">Cancelar Cambios</button>
                    </div>
                    <div class="col col-12 text-end mt-2">
                        <button class="boton" id="enviar" type="submit" disabled style="height: 3.4rem;width:15rem;background-color:grey">Guardar Cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
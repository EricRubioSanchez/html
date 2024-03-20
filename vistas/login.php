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
    <?php include_once("./navs/header.php");
    ?>
    <?php if(isset($errors)&&($errors!="")):?>
    <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert" style="position:absolute; margin-top:15vh; margin-left:33%">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin: auto;" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
        </svg>
        <div> <?php echo($errors) ?> </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container" style="padding-left: 0px;">

        <div class="articulo text-white container" style="width: 42.9375rem; margin:auto;margin-top: 19vh;">

            <form class="needs-validation px-4 " novalidate method="POST" action="../controlador/login.php">
                <div class="container">
                    <h1>Login</h1>
                    <div class="form-group mb-3">
                        <label for="correo">Correo</label>
                        <input required <?php if(isset($correu)){ echo("value='".$correu."'");} ?> type="email" class="form-control" style="width:36.3rem;" name="correo" id="correo" placeholder="example@gmail.com">
                        <div class="invalid-feedback">
                            Por favor introduce un correo valido.
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="contra">Contraseña</label>
                        <br>
                        <input required type="password" minlength="6" style="display:inline-block;width:32rem;" class="form-control" id="contra" name="password" placeholder="P@ssw0rd">
                        <div class="input-group-append">
                            <button onclick="canviarContra()" id="botonContra" class="btn btn-danger pb-1" style="min-height:0px;" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                </svg></button>
                        </div>
                        <div class="invalid-feedback">
                            Por favor introduce una contraseña de un mínimo de 6 caracteres.
                        </div>
                    </div>

                    <div class="row mt-5 pt-2">
                        <div class="col col-6">
                            <button class="boton" type="button" style="width: 16rem;height: 3.4rem;margin-bottom:0.5rem; ">Iniciar Con Google</button>
                        </div>
                        <div class="col col-6">
                            <a href="./recuperarContrasenya.php" class="link-danger nav-link text-end">Contraseña Olvidada?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12">
                            <button class="boton" type="submit" style="width: -webkit-fill-available;height: 3.4rem;">Enviar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 text-start" style="display: flex;">
                            <a class="link-light nav-link text-start" style="padding: 0px;">
                                <p>No tienes cuenta aún? </p>
                            </a>
                            <a href="./signin.php" style="padding: 0px;" class="link-danger nav-link text-start"> Registrate</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
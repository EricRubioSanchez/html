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
<?php session_start();
     include_once("./navs/header.php");
     if ($_SESSION['idLiga']!=0){
    include_once("./navs/aside.php");} ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container" style="width: 66.4rem; margin-top: 17vh;">
        <form class="needs-validation px-4 " novalidate>
            <div class="row">
                <div class="col col-12">
                    <h1>Ajustes Del Equipo</h1>
                </div>
                <div class="col col-4 text-center">
                    <img class="imagen " style="width: 18rem;" src="../imagenes/mii.png">
                </div>
                <div class="col col-8">
                    <div class="row">
                        <div class="col col-12">
                            <div class="form-group mb-5 mt-5">
                                <label for="nombreEquipo">Nombre de Equipo</label>
                                <input required type="text" class="form-control" id="nombreEquipo" value="Equipo 1">
                                <div class="invalid-feedback">
                                    Por favor selecciona un nombre para el equipo.
                                </div>
                            </div>
                            <div class="form-group mb-3 mt-5">
                                <label for="nombreAbrev">Abreviación</label>
                                <input required type="text" minlength="3" maxlength="3" class="form-control" id="nombreAbrev" value="EQ1">
                                <div class="invalid-feedback">
                                    La abreviación tiene que tener 3 caracteres.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-4 mt-3 text-center">
                <input class="boton" type="button" value="Cambiar Logo" onclick="document.getElementById('selectedFile').click();" style="height: 3.4rem;width:15rem;" />
                    <input type="file" id="selectedFile" accept="image/png"; style="display: none;" />
                </div>
            </div>
            <div class="row">
                <div class="col col-12 text-center">
                <button class="boton" type="submit" style="height: 3.4rem;width:15rem;margin-top: 5rem;">Guardar Cambios</button>
                </div>
            </div>
        </form>
        </div>
    </main>
</body>

</html>
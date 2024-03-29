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
     if (isset($_SESSION['idLiga'])&&$_SESSION['idLiga'] != 0) {
      include_once("./navs/aside.php");
  } ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container">
        <div class="articulo text-white container" style="width: 32.9375rem; margin:auto;margin-top: 23vh;">
            
            <form class="needs-validation px-4 " novalidate>
            <h1>Unirse Fantasy</h1>
                <div class="form-group mb-3 mt-4">
                    <label for="nombreLiga">Código de Invitación</label>
                    <input required type="text" class="form-control" id="nombreLiga" placeholder="Name">
                    <div class="invalid-feedback">
                    Por favor introduce un código.
                    </div>
                </div>
                <button class="boton" type="submit" style="width: -webkit-fill-available;height: 3.4rem;">Enviar</button>
            </form>
        </div>
    </main>
</body>

</html>
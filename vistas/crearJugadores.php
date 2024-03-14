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
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container-fluid" style="width: 80.9375rem; margin:auto;margin-top: 10vh;">

            <form class="needs-validation px-4 h4 mx-3" novalidate>
                <div class="row">
                    <div class="col col-6">
                        <h1>Crear Jugadores</h1>
                    </div>
                    <div class="col col-6">
                        <h2>Puntos Disponibles: 400</h2>
                    </div>
                </div>
                <div class="form-group mb-2 mt-3 ">
                    <div class="row">
                        <div class="col col-6"><label for="tiroLibre">Tiro Libre</label></div>
                        <div class="col col-4"><label for="pelo">Pelo</label></div>
                        <div class="col col-2"><label for="peloColor">Color Pelo</label></div>
                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="tiroLibre" id="tiroLibre" value="0" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="tiroLibre" value="0" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">

                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-4">
                            <select id="pelo" class="form-select">
                                <option selected>Cerrada</option>
                                <option>Abierta</option>
                            </select>
                        </div>
                        <div class="col col-2">
                            <input style="width: 10rem;max-width:none;" class="form-control form-control-color" type="color" id="peloColor">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2 mt-3">
                    <div class="row">
                        <div class="col col-6"><label for="tiro2">Tiro De 2</label></div>
                        <div class="col col-4"><label for="ojos">Ojos</label></div>
                        <div class="col col-2"><label for="ojosColor">Color Ojos</label></div>
                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="tiro2" id="tiro2" value="0" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="tiro2" value="0" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">
                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-4">
                            <select id="ojos" class="form-select">
                                <option selected>Cerrada</option>
                                <option>Abierta</option>
                            </select>
                        </div>
                        <div class="col col-2">
                            <input style="width: 10rem;max-width:none;" class="form-control form-control-color" type="color" id="ojosColor">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2 mt-3">
                    <div class="row">
                        <div class="col col-6 "><label for="tiro3">Tiro De 3</label></div>
                        <div class="col col-4"><label for="barba">Barba</label></div>
                        <div class="col col-2"><label for="barbaColor">Color Barba</label></div>
                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="tiro3" id="tiro3" value="0" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="tiro3" value="0" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">

                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-4">
                            <select id="barba" class="form-select">
                                <option selected>Cerrada</option>
                                <option>Abierta</option>
                            </select>
                        </div>
                        <div class="col col-2">
                            <input style="width: 10rem;max-width:none;" class="form-control form-control-color" type="color" id="barbaColor">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2 mt-3">
                    <div class="row">
                        <div class="col col-6 "><label for="rebotes">Rebotes</label></div>
                        <div class="col col-4"><label for="nariz">Nariz</label></div>
                        <div class="col col-2">
                            <img alt="Imagen del Personaje" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/mii.png">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="rebotes" id="rebotes" value="0" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="rebotes" value="0" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">

                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-4">
                            <select id="nariz" class="form-select">
                                <option selected>Cerrada</option>
                                <option>Abierta</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="form-group mb-2 mt-3">
                    <div class="row">
                        <div class="col col-6 "><label for="ast">Asistencias</label></div>
                        <div class="col col-4"><label for="boca">Boca</label></div>
                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="ast" id="ast" value="0" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="ast" value="0" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">

                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-4">
                            <select id="boca" class="form-select">
                                <option selected>Cerrada</option>
                                <option>Abierta</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="form-group mb-2 mt-3">
                    <div class="row">
                        <div class="col col-6 "><label for="blk">Bloqueos</label></div>
                        <div class="col col-4"><label for="posicion">Posicion</label></div>
                        <div class="col col-2"><label for="piel">Piel</label></div>
                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="blk" id="blk" value="0" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="blk" value="0" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">

                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-4">
                            <select id="posicion" class="form-select">
                                <option selected>Cerrada</option>
                                <option>Abierta</option>
                            </select>
                        </div>
                        <div class="col col-2">
                            <input style="width: 10rem;max-width:none;" class="form-control form-control-color" type="color" id="piel">
                        </div>

                    </div>
                </div>
                <div class="form-group mb-2 mt-3">
                    <div class="row">
                        <div class="col col-6 "><label for="robos">Robos</label></div>
                        <div class="col col-6"><label for="posicion">Nombre</label></div>

                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="robos" id="robos" value="0" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="robos" value="0" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">
                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-6">
                            <input required type="text" minlength="4" class="form-control" id="nombre" placeholder="Name">
                            <div class="invalid-feedback">
                                Por favor introduce un nombre válido.
                            </div>
                        </div>


                    </div>
                </div>
                <div class="form-group mb-2 mt-3">
                    <div class="row">
                        <div class="col col-6 "><label for="perdidas">Perdidas</label></div>
                        

                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <input type="range" name="perdidas" id="perdidas" value="100" min="0" max="100" step="1">
                            <input class="form-control" style="width:5.5rem;display:inline;" name="perdidas" value="100" min="0" max="100" step="1" type="number">
                            <div class="invalid-feedback">
                                Por favor introduce un numero entre el 0 y el 100.
                            </div>
                        </div>
                        <div class="col col-6"><button class="boton" type="submit" style="width: -webkit-fill-available;height: 3.4rem;">Enviar</button></div>
                    </div>
                </div>             
            </form>
        </div>
    </main>
</body>

</html>
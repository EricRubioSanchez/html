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
    <script defer src="../js/crearJugadores.js"></script>
    <script type="module" src="../js/editarJugadores.js"></script>
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
<?php ;
     include_once("./navs/header.php");
     if (isset($_SESSION['idLiga'])&&$_SESSION['idLiga'] != 0) {
        include_once("./navs/aside.php");
    } ?>

<?php if(isset($errors)&&($errors!="")):?>
    <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert" style="position:absolute; margin-top:15vh; margin-left:33%">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin: auto;" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
        </svg>
        <div> <?php echo($errors) ?> </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container-fluid" style="width: 80.9375rem; margin:auto;margin-top: 10vh;">

            <form class="needs-validation px-4 h4 mx-3" novalidate method="POST" action="../controlador/editarJugador.php">
                <div class="container">
                    <div class="row">
                        <div class="col col-xl-6 col-12">
                            <div class="row">
                                <div class="col col-9">
                                    <h1>Crear Jugadores</h1>
                                </div>
                                <div class="col col-3"><button style="width: 3.5rem;" id="randomStats" class="boton" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.6 9.6 0 0 0 7.556 8a9.6 9.6 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.6 10.6 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.6 9.6 0 0 0 6.444 8a9.6 9.6 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5" />
                                            <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192" />
                                        </svg></button></div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2 ">
                                        <div class="row">
                                            <div class="col col-12"><label for="tiroLibre">Tiro Libre</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" required name="tiroLibre" id="tiroLibre" value="<?= $jugador["ftm"];?>" min="0" max="100" step="1">
                                                <input class="form-control" required style="width:5.5rem;display:inline;" name="tiroLibre" value="<?= $jugador["ftm"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">
                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12"><label for="tiro2">Tiro De 2</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" required name="tiro2" id="tiro2" value="<?= $jugador["2pm"];?>" min="0" max="100" step="1">
                                                <input class="form-control" style="width:5.5rem;display:inline;" required name="tiro2" value="<?= $jugador["2pm"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">
                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12 "><label for="tiro3">Tiro De 3</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" required name="tiro3" id="tiro3" value="<?= $jugador["3pm"];?>" min="0" max="100" step="1">
                                                <input class="form-control" required style="width:5.5rem;display:inline;" name="tiro3" value="<?= $jugador["3pm"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">
                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12 "><label for="rebotes">Rebotes</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" required name="rebotes" id="rebotes" value="<?= $jugador["reb"];?>" min="0" max="100" step="1">
                                                <input class="form-control" required style="width:5.5rem;display:inline;" name="rebotes" value="<?= $jugador["reb"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">

                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12 "><label for="ast">Asistencias</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" name="ast" required id="ast" value="<?= $jugador["ast"];?>" min="0" max="100" step="1">
                                                <input class="form-control" required style="width:5.5rem;display:inline;" name="ast" value="<?= $jugador["ast"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">
                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12 "><label for="blk">Bloqueos</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" name="blk" required id="blk" value="<?= $jugador["blk"];?>" min="0" max="100" step="1">
                                                <input class="form-control" required style="width:5.5rem;display:inline;" name="blk" value="<?= $jugador["blk"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">

                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12 "><label for="robos">Robos</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" required name="robos" id="robos" value="<?= $jugador["stl"];?>" min="0" max="100" step="1">
                                                <input class="form-control" required style="width:5.5rem;display:inline;" name="robos" value="<?= $jugador["stl"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">
                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12"><label for="control" aria-describedby="controlHelp">Control</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input type="range" required name="control" id="control" value="<?= 100-$jugador["TurnOver"];?>" min="0" max="100" step="1">
                                                <input class="form-control" required style="width:5.5rem;display:inline;" name="control" value="<?= 100-$jugador["TurnOver"];?>" min="0" max="100" step="1" type="number">
                                                <div class="invalid-feedback">
                                                    Por favor introduce un número entre el 0 y el 100.
                                                </div>
                                                <br>
                                                <small id="controlHelp" class="form-text text-info">Cuanto menos control más perderá la pelota tu jugador.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-6 col-12 mt-xl-0 mt-5">
                            <div class="row">
                                <div class="col col-12">
                                    <h2 style="display: flex;">Puntos Disponibles: <div class="ms-2" id="puntos"></div>
                                        <div style="margin-left: auto;" class="text-end"><button style="width: 3.5rem;" id="randomStyle" class="boton" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.6 9.6 0 0 0 7.556 8a9.6 9.6 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.6 10.6 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.6 9.6 0 0 0 6.444 8a9.6 9.6 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5" />
                                                    <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192" />
                                                </svg></button></div>
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2 ">
                                        <div class="row">
                                            <div class="col col-8"><label for="pelo">Pelo</label></div>
                                            <div class="col col-4"><label for="peloColor">Color Pelo</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-8">
                                                <select id="pelo" name="selectPelo" class="form-select">
                                                    <option>Calvo</option>
                                                    <option>Largo</option>
                                                    <option>Medio</option>
                                                    <option>Corto</option>
                                                    <option>Afro</option>
                                                    <option>Trenzas</option>
                                                    <option>Rastas</option>
                                                    <option>Militar</option>
                                                    <option>Puntiagudo</option>
                                                    <option>PocoPelo</option>
                                                    <option>Flequillo</option>
                                                    <option>Despeinado</option>
                                                    <option>Cortinas</option>
                                                </select>
                                            </div>
                                            <div class="col col-4">
                                                <input style="width: 10rem;max-width:none;" class="form-control form-control-color" name="pelo" type="color" id="peloColor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-8"><label for="ojos">Ojos</label></div>
                                            <div class="col col-4"><label for="ojosColor">Color Ojos</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-8">
                                                <select id="ojos" name="selectOjos" class="form-select">
                                                    <option selected>Predeterminados</option>
                                                    <option>Eyeliner</option>
                                                    <option>Ojeras</option>
                                                    <option>MedioAbierto</option>
                                                    <option>ConPestañas</option>
                                                    <option>Sonrientes</option>
                                                </select>
                                            </div>
                                            <div class="col col-4">
                                                <input style="width: 10rem;max-width:none;" class="form-control form-control-color" name="ojos" type="color" id="ojosColor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-8"><label for="barba">Barba</label></div>
                                            <div class="col col-4"><label for="barbaColor">Color Barba</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-8">
                                                <select id="barba" name="selectBarba" class="form-select">
                                                    <option selected>Ninguna</option>
                                                    <option>BarbaCorta</option>
                                                    <option>Barba</option>
                                                    <option>BarbaLarga</option>
                                                    <option>BigoteCorto</option>
                                                    <option>Bigote</option>
                                                    <option>BigoteLargo</option>
                                                    <option>BigoteYBarbaCorta</option>
                                                    <option>BigoteYBarbaLarga</option>
                                                    <option>Perilla</option>
                                                    <option>PerillaCandado</option>
                                                </select>
                                            </div>
                                            <div class="col col-4">
                                                <input style="width: 10rem;max-width:none;" class="form-control form-control-color" type="color" name="barba" id="barbaColor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-8"><label for="accesorios">Accesorios</label></div>
                                            <div class="col col-4">
                                                <img alt="Cuerpo del Personaje" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/cuerpo.png">
                                                <img alt="Cabeza del Personaje" class="piel" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/cabeza.png">
                                                <img alt="Boca del Personaje" class="boca" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/boca/Predeterminada.png">
                                                <img alt="Barba del Personaje" class="barba" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" hidden src="../imagenes/creacion/barba/Perilla.png">
                                                <img alt="Nariz del Personaje" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/nariz.png">
                                                <img alt="Pupilas del Personaje" class="ojos" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/ojos/Predeterminados_2.png">
                                                <img alt="Ojos del Personaje" class="ojos" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/ojos/Predeterminados.png">
                                                <img alt="Accesorios del Personaje" class="accesorios" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" hidden src="../imagenes/creacion/accesorios/GafasAviador.png">
                                                <img alt="Pelo del Personaje" class="pelo" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" hidden src="../imagenes/creacion/pelo/Largo.png">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col col-8">
                                                <select id="accesorios" name="selectAccesorios" class="form-select">
                                                    <option selected>Ninguno</option>
                                                    <option>GafasAviador</option>
                                                    <option>GafasRedondas</option>
                                                    <option>GafasQuadradas</option>
                                                    <option>Cinta</option>
                                                    <option>CintaYGafas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-8"><label for="boca">Boca</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-8">
                                                <select id="boca" name="selectBoca" class="form-select">
                                                    <option selected>Predeterminada</option>
                                                    <option>Sonriente</option>
                                                    <option>Morritos</option>
                                                    <option>Labios</option>
                                                    <option>SonrisaMedia</option>
                                                    <option>Sonrisa</option>
                                                    <option>SonrisaAbierta</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-8"><label for="posicion1">Posicion</label></div>
                                            <div class="col col-4"><label for="piel">Piel</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-4">
                                                <select id="posicion1" name="selectPos1" class="form-select">
                                                    <option <?php if($jugador["pos"]=="C"){echo("selected");} ?>>C</option>
                                                    <option <?php if($jugador["pos"]=="PG"){echo("selected");} ?>>PG</option>
                                                    <option <?php if($jugador["pos"]=="SG"){echo("selected");} ?>>SG</option>
                                                    <option <?php if($jugador["pos"]=="PF"){echo("selected");} ?>>PF</option>
                                                    <option <?php if($jugador["pos"]=="SF"){echo("selected");} ?>>SF</option>
                                                </select>
                                            </div>
                                            <div class="col col-4">
                                                <select id="posicion2" name="selectPos2" class="form-select">
                                                    <option>Ninguna</option>
                                                    <option <?php if($jugador["2ndPos"]=="C"){echo("selected");} ?>>C</option>
                                                    <option <?php if($jugador["2ndPos"]=="PG"){echo("selected");} ?>>PG</option>
                                                    <option <?php if($jugador["2ndPos"]=="SG"){echo("selected");} ?>>SG</option>
                                                    <option <?php if($jugador["2ndPos"]=="PF"){echo("selected");} ?>>PF</option>
                                                    <option <?php if($jugador["2ndPos"]=="SF"){echo("selected");} ?>>SF</option>
                                                </select>
                                            </div>
                                            <div class="col col-4">
                                                <input style="width: 10rem;max-width:none;" class="form-control form-control-color" name="piel" value="#ad5833" type="color" id="piel">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-2">
                                        <div class="row">
                                            <div class="col col-12"><label for="nombre">Nombre</label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12">
                                                <input required type="text" minlength="4" name="nombre" value="<?= $jugador["nombre"];?>" class="form-control" id="nombre" placeholder="Name">
                                                <div class="invalid-feedback">
                                                    Por favor introduce un nombre válido.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group mb-1 mt-4">
                                        <div class="row">
                                            <div class="col col-12"><button class="boton" type="submit" style="width: -webkit-fill-available;height: 3.4rem;">Enviar</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="estiloJSON"><?= $jugador["imagen"]?></div>
    </main>
</body>

</html>
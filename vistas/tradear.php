<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../estils/headerAside.css">
    <link rel="stylesheet" href="../estils/estilosBasicos.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <title>Document</title>
    <script>
        function init() {
            // the selector will match all input controls of type :checkbox
            // and attach a click event handler 
            $("input:checkbox").on('click', function() {
                // in the handler, 'this' refers to the box clicked on
                var $box = $(this);

                if ($box.is(":checked")) {

                    // the name of the box is retrieved using the .attr() method
                    // as it is assumed and expected to be immutable
                    var group = "input:checkbox[name='" + $box.attr("name") + "']";
                    // the checked state of the group/box on the other hand will change
                    // and the current value is retrieved using .prop() method
                    $(group).prop("checked", false);
                    $box.prop("checked", true);
                } else {
                    $box.prop("checked", false);
                }
            })
        }
        $(document).ready(init)
    </script>
</head>

<body>
<?php session_start();
     include_once("./navs/header.php");
     if (isset($_SESSION['idLiga'])&&$_SESSION['idLiga'] != 0) {
        include_once("./navs/aside.php");
    } ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="container justify-content-between" style="margin-top: 8vh;">
            <form>
                <div class="row">
                    <div class="col col-xxl-6 col-12 mt-5">
                        <div class="articulo text-white container-fluid" style=" margin:auto;min-width:28rem;">
                            <div class="row">
                                <div class="col col-2 col-md-2 col-xl-1">
                                    <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                </div>
                                <div class="col col-xxl-8 col-xl-8 col-md-6 col-sm-6 col-6 mt-2 ms-4 text-start">
                                    <div class="row">
                                        <div class="col col-12 text-center">
                                            <h1>Equipo 1</h1>
                                        </div>
                                        <div class="col col-12 text-center">
                                            <h5>Eric Rubio</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="articulo text-white container-fluid mt-4" style="margin:auto;">
                            <div class="row">
                                <div class="col col-12 text-center" style="margin: auto;">
                                    <h2>Jugadores</h2>
                                </div>
                            </div>
                            <div class="jugadores">
                                <div class="container">
                                    <div class="row">
                                        <hr>
                                        <div class="col col-11">
                                            <div class="row">
                                                <div class="col col-3" style="margin: auto;">
                                                    <img style="width: 8rem;" src="../imagenes/mii.png">
                                                </div>
                                                <div class="col col-9">
                                                    <div class="row">
                                                        <div class="col col-6 nombre" style="margin: auto;">
                                                            <h4>Jarret Allen</h4>
                                                        </div>
                                                        <div class="col col-2 text-center">
                                                            <a class="favoritos" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" alt="IconoAñadirAFavoritos" width="24" height="24" fill="#FFF" class="bi bi-star" viewBox="0 0 16 16">
                                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="col col-4 text-end puntosFan" style="margin: auto;">
                                                            <div class="row text-end" style="margin: auto;font-size: 1rem;">
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    PFSY 200
                                                                </div>
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    AVG 13
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-5 estado">
                                                            <svg xmlns="http://www.w3.org/2000/svg" alt="Tick En Verde" style="margin-bottom:0.2rem;background-color: green;border-radius:100%" width="30" height="30" fill="#FFF" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                            </svg>
                                                            Alineable
                                                        </div>
                                                        <div class="col col-4 posicio text-center">SG - PG</div>

                                                        <div class="col col-3 text-end precio" style="font-size: 1.3rem;">40 <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                                            </svg></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-8" style="display:inline-flex;">
                                                            <div class="puntos">9</div>
                                                            <div class="puntos">15</div>
                                                            <div class="puntos">-9</div>
                                                            <div class="puntos">0</div>
                                                            <div class="puntos">0</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="equipo1" value="" id="defaultCheck2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <hr>
                                        <div class="col col-11">
                                            <div class="row">
                                                <div class="col col-3" style="margin: auto;">
                                                    <img style="width: 8rem;" src="../imagenes/mii.png">
                                                </div>
                                                <div class="col col-9">
                                                    <div class="row">
                                                        <div class="col col-6 nombre" style="margin: auto;">
                                                            <h4>Jarret Allen</h4>
                                                        </div>
                                                        <div class="col col-2 text-center">
                                                            <a class="favoritos" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" alt="IconoQuitarDeFavoritos" width="24" height="24" fill="#FFF" class="bi bi-star" viewBox="0 0 16 16">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="col col-4 text-end puntosFan" style="margin: auto;">
                                                            <div class="row text-end" style="margin: auto;font-size: 1rem;">
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    PFSY 200
                                                                </div>
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    AVG 13
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-5 estado">
                                                            <svg xmlns="http://www.w3.org/2000/svg" alt="Tirita En Rojo" style="margin-bottom:0.2rem;background-color: red;border: 2px solid #FFF;border-radius:100%" width="30" height="30" fill="#FFF" class="bi bi-check-circle" viewBox="-4 -4 24 24">
                                                                <path d="m2.68 7.676 6.49-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Zm5.71-2.858a.5.5 0 1 0-.708.707.5.5 0 0 0 .707-.707ZM6.974 6.939a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707M5.56 8.354a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m2.828 2.828a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707m1.414-2.121a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.706-.708.5.5 0 0 0 .707.708Zm-4.242.707a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m1.414-2.122a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707M8.646 3.354l4 4 .708-.708-4-4zm-1.292 9.292-4-4-.708.708 4 4z" />
                                                            </svg>
                                                            Lesionado
                                                        </div>
                                                        <div class="col col-4 posicio text-center">SG - PG</div>

                                                        <div class="col col-3 text-end precio" alt="moneda" style="font-size: 1.3rem;">1 <svg xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                                            </svg></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-8" style="display:inline-flex;">
                                                            <div class="puntos">9</div>
                                                            <div class="puntos">15</div>
                                                            <div class="puntos">-9</div>
                                                            <div class="puntos">0</div>
                                                            <div class="puntos">0</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="equipo1" value="" id="defaultCheck1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xxl-6 col-12 mt-5">
                        <div class="articulo text-white container-fluid" style=" margin:auto;min-width:28rem;">
                            <div class="row">
                                <div class="col col-2 col-md-2 col-xl-1">
                                    <img class="imagen " style="width: 6rem;" src="../imagenes/mii.png">
                                </div>
                                <div class="col col-xxl-8 col-xl-8 col-md-6 col-sm-6 col-6 mt-2 ms-4 text-start">
                                    <div class="row">
                                        <div class="col col-12 text-center">
                                            <h1>Equipo 2</h1>
                                        </div>
                                        <div class="col col-12 text-center">
                                            <h5>Dani Torres</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="articulo text-white container-fluid mt-4" style="margin:auto;">
                            <div class="row">
                                <div class="col col-12 text-center" style="margin: auto;">
                                    <h2>Jugadores</h2>
                                </div>
                            </div>
                            <div class="jugadores">
                                <div class="container">
                                    <div class="row">
                                        <hr>
                                        <div class="col col-11">
                                            <div class="row">
                                                <div class="col col-3" style="margin: auto;">
                                                    <img style="width: 8rem;" src="../imagenes/mii.png">
                                                </div>
                                                <div class="col col-9">
                                                    <div class="row">
                                                        <div class="col col-6 nombre" style="margin: auto;">
                                                            <h4>Jarret Allen</h4>
                                                        </div>
                                                        <div class="col col-2 text-center">
                                                            <a class="favoritos" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" alt="IconoAñadirAFavoritos" width="24" height="24" fill="#FFF" class="bi bi-star" viewBox="0 0 16 16">
                                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="col col-4 text-end puntosFan" style="margin: auto;">
                                                            <div class="row text-end" style="margin: auto;font-size: 1rem;">
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    PFSY 200
                                                                </div>
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    AVG 13
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-5 estado">
                                                            <svg xmlns="http://www.w3.org/2000/svg" alt="Tick En Verde" style="margin-bottom:0.2rem;background-color: green;border-radius:100%" width="30" height="30" fill="#FFF" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                            </svg>
                                                            Alineable
                                                        </div>
                                                        <div class="col col-4 posicio text-center">SG - PG</div>

                                                        <div class="col col-3 text-end precio" alt="moneda" style="font-size: 1.3rem;">40 <svg xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                                            </svg></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-8" style="display:inline-flex;">
                                                            <div class="puntos">9</div>
                                                            <div class="puntos">15</div>
                                                            <div class="puntos">-9</div>
                                                            <div class="puntos">0</div>
                                                            <div class="puntos">0</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="equipo2" value="" id="14">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <hr>
                                        <div class="col col-11">
                                            <div class="row">
                                                <div class="col col-3" style="margin: auto;">
                                                    <img style="width: 8rem;" src="../imagenes/mii.png">
                                                </div>
                                                <div class="col col-9">
                                                    <div class="row">
                                                        <div class="col col-6 nombre" style="margin: auto;">
                                                            <h4>Jarret Allen</h4>
                                                        </div>
                                                        <div class="col col-2 text-center">
                                                            <a class="favoritos" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" alt="IconoQuitarDeFavoritos" width="24" height="24" fill="#FFF" class="bi bi-star" viewBox="0 0 16 16">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="col col-4 text-end puntosFan" style="margin: auto;">
                                                            <div class="row text-end" style="margin: auto;font-size: 1rem;">
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    PFSY 200
                                                                </div>
                                                                <div class="col col-12" style="padding-right: 0px;">
                                                                    AVG 13
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-5 estado">
                                                            <svg xmlns="http://www.w3.org/2000/svg" alt="Tirita En Rojo" style="margin-bottom:0.2rem;background-color: red;border: 2px solid #FFF;border-radius:100%" width="30" height="30" fill="#FFF" class="bi bi-check-circle" viewBox="-4 -4 24 24">
                                                                <path d="m2.68 7.676 6.49-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Zm5.71-2.858a.5.5 0 1 0-.708.707.5.5 0 0 0 .707-.707ZM6.974 6.939a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707M5.56 8.354a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m2.828 2.828a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707m1.414-2.121a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.706-.708.5.5 0 0 0 .707.708Zm-4.242.707a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m1.414-2.122a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707M8.646 3.354l4 4 .708-.708-4-4zm-1.292 9.292-4-4-.708.708 4 4z" />
                                                            </svg>
                                                            Lesionado
                                                        </div>
                                                        <div class="col col-4 posicio text-center">SG - PG</div>

                                                        <div class="col col-3 text-end precio" alt="moneda" style="font-size: 1.3rem;">1 <svg xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                                            </svg></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-8" style="display:inline-flex;">
                                                            <div class="puntos">9</div>
                                                            <div class="puntos">15</div>
                                                            <div class="puntos">-9</div>
                                                            <div class="puntos">0</div>
                                                            <div class="puntos">0</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="equipo2" value="" id="15">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="width: 100%;">
                    <div class="articulo text-white container mx-2 my-4" style="min-width:28rem;">
                        <div class="row">
                            <div class="col col-5">
                                <div class="row">
                                    <div class="col col-4">
                                        <div class="row">
                                            <div class="col col-12">
                                                <h3>Ofreces:</h3>
                                            </div>
                                            <div class="col col-12" style="margin-top: 3rem;"><label for="equipo1Precio">
                                                    <h6>Precio</h6>
                                                </label></div>
                                        </div>
                                    </div>
                                    <div class="col col-8"><img class="imagen " style="width: 8rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-4">
                                        <div class="row">
                                            <div class="col col-10" style="padding-right: 0px;"><input type="number" class="form-control" id="equipo1Precio" min="0" value="0"></div>
                                            <div class="col col-2" style="padding-left: 3px;margin:auto;"><svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                                    <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="col col-7 ms-3"  style="margin:auto;">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-2 text-center" style="margin: auto;">
                                <div class="col col-12 mb-2">
                                    <button style="width: 8rem;" type="submit" class="boton verde">Enviar</button>
                                </div>
                                <div class="col col-12 mt-2">
                                    <button style="width: 8rem;" type="reset" class="boton">Cancelar</button>
                                </div>
                            </div>
                            <div class="col col-5">
                                <div class="row">
                                    <div class="col col-4">
                                        <div class="row">
                                            <div class="col col-12">
                                                <h3>Recibes:</h3>
                                            </div>
                                            <div class="col col-12" style="margin-top: 3rem;"><label for="equipo2Precio">
                                                    <h6>Precio</h6>
                                                </label></div>
                                        </div>
                                    </div>
                                    <div class="col col-8"><img class="imagen " style="width: 8rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-4 ">
                                        <div class="row">
                                            <div class="col col-10" style="padding-right: 0px;"><input type="number" class="form-control" id="equipo2Precio" min="0" value="0"></div>
                                            <div class="col col-2" style="padding-left: 3px;margin:auto;"><svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                                    <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="col col-7  ms-3" style="margin:auto;">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
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
</head>

<body>
<?php session_start();
     include_once("./navs/header.php");
     if ($_SESSION['idLiga']!=0){
    include_once("./navs/aside.php");} ?>
    <main class="main align-items-center justify-content-center justify-content-md-between container-fluid">
    <div class="articulo text-white container-fluid" style="margin-top: 10vh;max-width:95rem">

            <div class="row">
                <div class="col col-1">
                    <img class="imagen " style="width: 8rem;" src="../imagenes/mii.png">
                </div>
                <div class="col col-xxl-10 col-xl-10 col-md-8 col-sm-6 col-6" style="margin: auto;">
                    <div class="col col-12">
                        <h1>Nombre del Equipo</h1>
                    </div>
                    <div class="col col-12">
                        <h5>Eric Rubio Sanchez</h5>
                    </div>
                    <div class="col col-12 text-end"> <button onclick="window.location='./ajustes.php';" style="width: 13rem;" class="text-center boton">Ajustes</button></div>
                </div>
            </div>
        </div>
        <div class="container-fluid justify-content-between" style="margin-top: 3vh;">
            <div class="row">
                <div class="col col-xxl-6 col-12" style="margin-inline: auto;width:fit-content;">
                    <div class="articulo text-white container-fluid" style="min-width:38rem;width: 45rem;margin:auto;margin-bottom: 3vh;padding:0%">
                        <div>
                            <div class="card" style="width: 10rem;position:absolute;margin-left:7rem;margin-top:2rem;">
                                <button class="text-white" style="background-color: #2D2D2D;border: 1px solid;">
                                    <img src="../imagenes/mii.png" class="card-img-top" alt="ImagenDelJugador">
                                    <hr style="margin: 0%;">
                                    <div>
                                        <h5 class="card-title text-white">C - Jarret Allen</h5>
                                    </div>
                                </button>
                            </div>
                            <div class="card" style="width: 10rem;position:absolute;margin-left:31rem;margin-top:8rem;">
                                <button class="text-white" style="background-color: #2D2D2D;border: 1px solid;">
                                    <img src="../imagenes/mii.png" class="card-img-top" alt="ImagenDelJugador">
                                    <hr style="margin: 0%;">
                                    <div>
                                        <h5 class="card-title text-white">SF - Jarret Allen</h5>
                                    </div>

                                </button>
                            </div>
                            <div class="card" style="width: 10rem;position:absolute;margin-left:3rem;margin-top:15rem;">
                                <button class="text-white" style="background-color: #2D2D2D;border: 1px solid;">
                                    <img src="../imagenes/mii.png" class="card-img-top" alt="ImagenDelJugador">
                                    <hr style="margin: 0%;">
                                    <div>
                                        <h5 class="card-title text-white">PF - Jarret Allen</h5>
                                    </div>

                                </button>
                            </div>
                            <div class="card" style="width: 10rem;position:absolute;margin-left:17rem;margin-top:28rem;">
                                <button class="text-white" style="background-color: #2D2D2D;border: 1px solid;">
                                    <img src="../imagenes/mii.png" class="card-img-top" alt="ImagenDelJugador">
                                    <hr style="margin: 0%;">
                                    <div>
                                        <h5 class="card-title text-white">PG - Jarret Allen</h5>
                                    </div>

                                </button>
                            </div>
                            <div class="card" style="width: 10rem;position:absolute;margin-left:33rem;margin-top:31rem;">
                                <button class="text-white" style="background-color: #2D2D2D;border: 1px solid;">
                                    <img src="../imagenes/mii.png" class="card-img-top" alt="ImagenDelJugador">
                                    <hr style="margin: 0%;">
                                    <div>
                                        <h5 class="card-title text-white">SG - Jarret Allen</h5>
                                    </div>

                                </button>
                            </div>
                        </div>


                        <svg id="svg" viewBox="0 0 255 255" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15,70 a5,6 0 0,0 225,0" stroke="#dd0000" fill="none" />
                            <path d="M66,127 a1,1 0 0,0 122,0" stroke="#dd0000" fill="none"></path>


                            <path stroke="#dd0000" fill="none" d=" M 66 127 A 61 61 90 0 1 68 111" />
                            <path stroke="#dd0000" fill="none" d=" M 69 107 A 61 61 90 0 1 76 93" />
                            <path stroke="#dd0000" fill="none" d=" M 79 90 A 61 61 90 0 1 90 79" />
                            <path stroke="#dd0000" fill="none" d=" M 93 76 A 61 61 90 0 1 107 69" />
                            <path stroke="#dd0000" fill="none" d=" M 111 68 A 61 61 90 0 1 127 66" />
                            <path stroke="#dd0000" fill="none" d=" M 131 66 A 61 61 90 0 1 147 69" />
                            <path stroke="#dd0000" fill="none" d=" M 150 71 A 61 61 90 0 1 164 79" />
                            <path stroke="#dd0000" fill="none" d=" M 167 81 A 61 61 90 0 1 178 93" />
                            <path stroke="#dd0000" fill="none" d=" M 180 96 A 61 61 90 0 1 186 111" />
                            <path stroke="#dd0000" fill="none" d=" M 187 115 A 61 61 90 0 1 188 131" />

                            <line stroke="#dd0000" x1="240" y1="70" x2="240" y2="0"></line>
                            <line stroke="#dd0000" x1="15" y1="70" x2="15" y2="0"></line>

                            <line stroke="#dd0000" x1="54" y1="127" x2="54" y2="0"></line>
                            <line stroke="#dd0000" x1="200" y1="127" x2="200" y2="0"></line>

                            <line stroke="#dd0000" x1="54" y1="127" x2="200" y2="127"></line>

                            <line stroke="#dd0000" x1="107" y1="10" x2="147" y2="10"></line>
                            <line stroke="#dd0000" x1="127" y1="10" x2="127" y2="15"></line>
                            <circle r="5" cx="127" cy="20" stroke="#dd0000" fill="none"></circle>
                            <path d="M102,10 a1,1 0 0,0 50,0" stroke="#dd0000" fill="none"></path>
                        </svg>
                    </div>
                </div>
                <div class="col col-xxl-5 col-12" style="margin-inline: auto;width:fit-content;">
                    <div class="articulo text-white container-fluid" style="margin:auto;max-width:max-content;">
                        <div class="row">
                            <div class="col col-12" style="margin: auto;">
                                <h2>Jugadores</h2>
                            </div>
                        </div>
                        <div class="jugadores">
                            <div class="row">
                                <hr>
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


                                        <div class="col col-4 text-end">
                                            <div class="btn-group dropbox">
                                                <button type="button" class="boton dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark">
                                                    <li><a class="dropdown-item" href="#">Añadir A Favoritos</a></li>
                                                    <li><a class="dropdown-item" href="#">Añadir Al Mercado</a></li>
                                                    <li><a class="dropdown-item" href="#">Subir Cláusula</a></li>
                                                    <li><a class="dropdown-item" href="#">Soltar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <div class="col col-3" style="margin: auto;">
                                    <img style="width: 8rem;" src="../imagenes/mii.png">
                                </div>
                                <div class="col col-9">
                                    <div class="row">
                                        <div class="col col-6" style="margin: auto;">
                                            <h4>Jarret Allen</h4>
                                        </div>

                                        <div class="col col-2 text-center">
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" alt="IconoQuitarDeFavoritos" width="24" height="24" fill="#FFF" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>

                                            </a>
                                        </div>
                                        <div class="col col-4 text-end" style="margin: auto;">
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
                                        <div class="col col-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" alt="Tirita En Rojo" style="margin-bottom:0.2rem;background-color: red;border: 2px solid #FFF;border-radius:100%" width="30" height="30" fill="#FFF" class="bi bi-check-circle" viewBox="-4 -4 24 24">
                                                <path d="m2.68 7.676 6.49-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Zm5.71-2.858a.5.5 0 1 0-.708.707.5.5 0 0 0 .707-.707ZM6.974 6.939a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707M5.56 8.354a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m2.828 2.828a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707m1.414-2.121a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.706-.708.5.5 0 0 0 .707.708Zm-4.242.707a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m1.414-2.122a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707M8.646 3.354l4 4 .708-.708-4-4zm-1.292 9.292-4-4-.708.708 4 4z" />
                                            </svg>
                                            Lesionado
                                        </div>
                                        <div class="col col-4 text-center">C</div>

                                        <div class="col col-3 text-end" style="font-size: 1.3rem;">1 <svg xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
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


                                        <div class="col col-4 text-end">
                                            <div class="btn-group dropbox">
                                                <button type="button" class="boton dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark">
                                                    <li><a class="dropdown-item" href="#">Quitar De Favoritos</a></li>
                                                    <li><a class="dropdown-item" href="#">Quitar Del Mercado</a></li>
                                                    <li><a class="dropdown-item" href="#">Subir Cláusula</a></li>
                                                    <li><a class="dropdown-item" href="#">Soltar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
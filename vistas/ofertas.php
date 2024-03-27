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

</head>

<body>
<?php session_start();
     include_once("./navs/header.php");
     if (isset($_SESSION['idLiga'])&&$_SESSION['idLiga'] != 0) {
        include_once("./navs/aside.php");
    } ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center container-fluid">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <div class="col col-xxl-5 col-12 mt-5 mx-2 ">
                    <div class="articulo text-white pb-5 container" style=" margin:auto;margin-top: 4vh; padding-top:3rem;padding-left:3rem;">
                        <div class="row">
                            <div class="col col-12">
                                <h1>Ofertas Recibidas</h1>
                            </div>
                        </div>
                    </div>
                    <div class="articulo text-white container mt-4" style="margin:auto;">
                        <div class="row mx-2">
                            <div class="col col-6 text-start" style="margin: auto;">
                                <h2>Ofreces:</h2>
                            </div>
                            <div class="col col-6 text-end" style="margin: auto;">
                                <h2>Recibes:</h2>
                            </div>
                        </div>
                        <div class="row mx-3">
                            <hr>
                            <div class="col col-4 text-start">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>

                            </div>
                            <div class="col col-4 text-center" style="margin: auto;">
                                <div class="col col-12 mb-2">
                                    <button style="width: 8rem;" type="submit" class="boton verde">Aceptar</button>
                                </div>
                                <div class="col col-12 mt-2">
                                    <button style="width: 8rem;" type="reset" class="boton">Cancelar</button>
                                </div>
                            </div>
                            <div class="col col-4 text-end">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-3">
                            <hr>
                            <div class="col col-4 text-start">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>

                            </div>
                            <div class="col col-4 text-center" style="margin: auto;">
                                <div class="col col-12 mb-2">
                                    <button style="width: 8rem;" type="submit" class="boton verde">Aceptar</button>
                                </div>
                                <div class="col col-12 mt-2">
                                    <button style="width: 8rem;" type="reset" class="boton">Cancelar</button>
                                </div>
                            </div>
                            <div class="col col-4 text-end">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-xxl-5 col-12 mt-5 mx-2">
                    <div class="articulo text-white container pb-5" style=" margin:auto;margin-top: 4vh; padding-top:3rem;padding-left:3rem;">
                        <div class="row">
                            <div class="col col-12">
                                <h1>Ofertas Enviadas</h1>
                            </div>
                        </div>
                    </div>
                    <div class="articulo text-white container mt-4" style="margin:auto;">
                        <div class="row mx-2">
                            <div class="col col-6 text-start" style="margin: auto;">
                                <h2>Ofreces:</h2>
                            </div>
                            <div class="col col-6 text-end" style="margin: auto;">
                                <h2>Recibes:</h2>
                            </div>
                        </div>
                        <div class="row mx-3">
                            <hr>
                            <div class="col col-4 text-start">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>

                            </div>
                            <div class="col col-4 text-center" style="margin: auto;">
                                <div class="col col-12 mt-2">
                                    <button style="width: 8rem;" type="reset" class="boton">Cancelar</button>
                                </div>
                            </div>
                            <div class="col col-4 text-end">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-3">
                            <hr>
                            <div class="col col-4 text-start">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-4 text-center" style="margin: auto;">
                                <div class="col col-12 mt-2">
                                    <button style="width: 8rem;" type="reset" class="boton">Cancelar</button>
                                </div>
                            </div>
                            <div class="col col-4 text-end">
                                <div class="row">
                                    <div class="col col-12"><img class="imagen " style="width: 6rem;" src="../imagenes/mii.png"></div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="padding-right: 0px; font-size:1.5rem;"> 1
                                        <svg alt="moneda" xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="40" height="40" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-12" style="margin:auto">
                                        <h5>Jarret Allen</h5>
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
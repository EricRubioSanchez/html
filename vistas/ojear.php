<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../estils/headerAside.css">
    <link rel="stylesheet" href="../estils/estilosBasicos.css">
    <link rel="stylesheet" href="../estils/tablas.css">
    <title>Document</title>
</head>

<body>
    <?php include_once("./navs/header.php");
    include_once("./navs/aside.php") ?>
    <main class="main d-flex flex-wrap align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container-fluid pb-3" style="width: 92.9375rem; margin:auto;margin-top: 11vh; padding-top:1rem;padding-left:3rem;">
            <div class="row">
                <div class="col col-12">
                    <h1>Jugadores</h1>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-2 col-md-4 col-6">
                    <div class="row form-group">
                        <div class="col col-12"><label for="nombre">Nombre</label></div>
                        <div class="col col-12"><input type="text" class="form-control" id="nombre" placeholder="Name"></div>
                    </div>
                </div>

                <div class="col col-lg-2 col-md-4 col-6">
                    <div class="row form-group">
                        <div class="col col-12">
                            <label for="salud">Salud</label>
                        </div>
                        <div class="col col-12">
                            <select id="salud" class="form-select">
                                <option selected>Todos</option>
                                <option>Alineables</option>
                                <option>Lesionados</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-4 col-6">
                    <div class="row form-group">
                        <div class="col col-12">
                            <label for="posicion">Posicion</label>
                        </div>
                        <div class="col col-12">
                            <select id="posicion" class="form-select">
                                <option selected>Todas</option>
                                <option>C</option>
                                <option>PG</option>
                                <option>SG</option>
                                <option>PF</option>
                                <option>SF</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-4 col-6">
                    <div class="row form-group">
                        <div class="col col-12">
                            <label for="equipo">Equipo</label>
                        </div>
                        <div class="col col-12">
                            <select id="equipo" class="form-select">
                                <option selected>Todos</option>
                                <option>Customs</option>
                                <option>Bases y Custom</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-4 col-6">
                    <div class="row form-group">
                        <div class="col col-12">
                            <label for="fsy">Equipo FSY</label>
                        </div>
                        <div class="col col-12">
                            <select id="fsy" class="form-select">
                                <option selected>Todos</option>
                                <option>Solo Equipos FSY</option>
                                <option>Sin Equipos FSY</option>
                                <option>EQ1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-4 col-6">
                    <div class="row form-group">
                        <div class="col col-12">
                            <label for="favoritos">Favoritos</label>
                        </div>
                        <div class="col col-12">
                            <select id="favoritos" class="form-select">
                                <option selected>Todos</option>
                                <option>En Favoritos</option>
                                <option>No en Favoritos</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="articulo text-white table-responsive" style="width: 92.9375rem; margin:auto;margin-top: 5vh;padding:0;padding-top:2rem;padding-bottom:2rem;">
            <table style="margin:auto;">
                <thead>
                    <th>Jugador</th>
                    <th>Salud</th>
                    <th>Pos</th>
                    <th>Equipo</th>
                    <th>FSY</th>
                    <th>Precio</th>
                    <th>MIN</th>
                    <th>2PM</th>
                    <th>FTM</th>
                    <th>3PM</th>
                    <th>PTS</th>
                    <th>REB</th>
                    <th>AST</th>
                    <th>BLK</th>
                    <th>STL</th>
                    <th>TO</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../imagenes/mii.png" width="64px" height="64px"> Jarret Allen</td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" alt="Tick En Verde" style="margin-bottom:0.2rem;background-color: green;border-radius:100%" width="30" height="30" fill="#FFF" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                            </svg>
                            Alineable
                        </td>
                        <td>SG-PF</td>
                        <td>CAV</td>
                        <td>EQ1</td>
                        <td>10</td>
                        <td>30.2</td>
                        <td>5.4</td>
                        <td>11.2</td>
                        <td>4.5</td>
                        <td>20.3</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" alt="IconoQuitarDeFavoritos" width="24" height="24" fill="#FFF" class="bi bi-star" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../imagenes/mii.png" width="64px" height="64px"> Jarret Allen</td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" alt="Tirita En Rojo" style="margin-bottom:0.2rem;background-color: red;border: 2px solid #FFF;border-radius:100%" width="30" height="30" fill="#FFF" class="bi bi-check-circle" viewBox="-4 -4 24 24">
                                <path d="m2.68 7.676 6.49-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Zm5.71-2.858a.5.5 0 1 0-.708.707.5.5 0 0 0 .707-.707ZM6.974 6.939a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707M5.56 8.354a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m2.828 2.828a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707m1.414-2.121a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.706-.708.5.5 0 0 0 .707.708Zm-4.242.707a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707m1.414-.707a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708m1.414-2.122a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707M8.646 3.354l4 4 .708-.708-4-4zm-1.292 9.292-4-4-.708.708 4 4z" />
                            </svg>
                            Lesionado
                        </td>
                        <td>SG-PF</td>
                        <td>CAV</td>
                        <td>FA</td>
                        <td>0</td>
                        <td>30.2</td>
                        <td>5.4</td>
                        <td>11.2</td>
                        <td>4.5</td>
                        <td>20.3</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td> 13.4</td>
                        <td>
                            <a class="favoritos" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" alt="IconoAñadirAFavoritos" width="24" height="24" fill="#FFF" class="bi bi-star" viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
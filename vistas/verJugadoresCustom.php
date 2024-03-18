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
    <main class="main align-items-center justify-content-center justify-content-md-between container-fluid">
        <div class="articulo text-white container-fluid" style="width: 82.9375rem; margin:auto;margin-top: 13vh; padding-top:3rem;padding-left:3rem;">
            <div class="row">
                <div class="col col-12">
                    <h1>Jugadores Custom</h1>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 text-end">
                    <button onclick="window.location='./crearJugadores.php';" style="width: 13rem;" class="text-center boton">Nuevo Jugador</button>
                    <button  style="width: 13rem;" class="boton text-center">Guardar Archivo</button>
                    <input class="boton" type="button" value="Cargar Archivo" onclick="document.getElementById('selectedFile').click();" style="width: 13rem;" />
                    <input type="file" id="selectedFile" accept=".json" style="display: none;" />
                </div>
            </div>
        </div>
        <div class="articulo text-white table-responsive" style="width: 82.9375rem; margin:auto;margin-top: 10vh;padding:0;padding-top:2rem;padding-bottom:2rem;">
            <table style="margin:auto;">
                <thead>
                    <th>Jugador</th>
                    <th>Pos</th>
                    <th>FTM</th>
                    <th>2PM</th>
                    <th>3PM</th>
                    <th>REB</th>
                    <th>AST</th>
                    <th>BLK</th>
                    <th>STL</th>
                    <th>TO</th>
                    <th   class="px-1"></th>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../imagenes/mii.png" width="64px" height="64px"> Jarret Allen</td>
                        <td>SG-PF</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td   class="px-3">
                            <button style="width: 4rem;" class=" boton text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" alt="eliminar" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                </svg>
                            </button>
                            <button style="width: 4rem;" class=" boton text-center verde">
                                <svg xmlns="http://www.w3.org/2000/svg" alt="editar" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../imagenes/mii.png" width="64px" height="64px"> Jarret Allen</td>
                        <td>SG-PF</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td  class="px-3">
                        <button  style="width: 4rem;" class=" boton text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" alt="eliminar" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                </svg>
                            </button>
                            <button style="width: 4rem;" class=" boton text-center verde">
                                <svg xmlns="http://www.w3.org/2000/svg" alt="editar" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
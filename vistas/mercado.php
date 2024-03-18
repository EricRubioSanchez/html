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
        <div class="articulo text-white container-fluid pb-5" style="width: 82.9375rem; margin:auto;margin-top: 11vh; padding-top:3rem;padding-left:3rem;">
            <div class="row">
                <div class="col col-12">
                    <h1>Mercado</h1>
                </div>
            </div>
        </div>
        <div class="articulo text-white table-responsive" style="width: 82.9375rem; margin:auto;margin-top: 5vh;padding:0;padding-top:2rem;padding-bottom:2rem;">
            <table style="margin:auto;">
                <thead>
                    <th>Jugador</th>
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
                        <td><button style="width: 8rem;" class=" boton verde text-center">Pujar
                            </button></td>
                    </tr>
                    <tr>
                        <td><img src="../imagenes/mii.png" width="64px" height="64px"> Jarret Allen</td>
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
                        <td><button style="width: 8rem;" class=" boton text-center">Quitar Puja
                            </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
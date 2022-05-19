<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$comando = $con->prepare("SELECT * FROM tbllimpieza ");

$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <link rel="preload" href="css/normalize.css" as="styles">
</head>
<body>
    <div class="busqueda">
        <div class="search">
            <form action="#">
                <input type="text"
                    placeholder=" Search Courses"
                    name="search">
                <button>
                    <i class="fa fa-search"
                        style="font-size: 18px;">
                    </i>
                </button>
            </form>
        </div>
    </div>
    
       <a href="usuarios.php" target="Anpiss"><svg xmlns="http://www.w3.org/2000/svg" class=" log-usua icon icon-tabler icon-tabler-text-wrap" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="18" x2="9" y2="18" />
            <path d="M4 12h13a3 3 0 0 1 0 6h-4l2 -2m0 4l-2 -2" />
        </svg></a>
    <main class="contenedor contenedor-1">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Informacion de usuario</h4>
                </div>
            </div>

            <div class="row row-1">
                <div class="col">
                    <form class="row g-3" method="POST" action="" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        <div class="">
                            <h2 id="codigo" name="nombre">Fecha: <?php echo $row['fecha']; ?> 
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Limpieza: <?php echo $row['limpieza']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Desinfeccion: <?php echo $row['desinfeccion']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Nombre del desinfectante: <?php echo $row['nombre del desinfectante']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Choque de desinfeccion: <?php echo $row['choque de desinfeccion']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Pisos: <?php echo $row['pisos']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Paredes: <?php echo $row['paredes']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Estufas: <?php echo $row['estufas']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Puertas: <?php echo $row['puertas']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Mesas: <?php echo $row['mesas']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Sillas: <?php echo $row['sillas']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Techos: <?php echo $row['techos']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Observaciones: <?php echo $row['Observaciones']; ?></h2>
                        </div>

                        <div>
                            <h2 id="stock" name="documento">Id: <?php echo $row['Id']; ?></h2>
                        </div>

                        <div class="col-md-12 col-1">
                            <a class="btn btn-secondary btn-1" href="DocLimpieza.php">Regresar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
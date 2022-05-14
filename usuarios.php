<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$activo = 1;

$comando = $con->prepare("SELECT * FROM tblusuario WHERE activo=:mi_activo ORDER BY id ASC");
$comando->execute(['mi_activo' => $activo]);
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
    
       <a href="Principal.html" target="Anpiss"><svg xmlns="http://www.w3.org/2000/svg" class=" log-usua icon icon-tabler icon-tabler-text-wrap" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="18" x2="9" y2="18" />
            <path d="M4 12h13a3 3 0 0 1 0 6h-4l2 -2m0 4l-2 -2" />
        </svg></a> 

        <main class="contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>Informacion usuarios</h4>
                        <a href="registrarusu.html" class="btn btn-primary aling">Nuevo Usuario</a>
                    
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table >
                        <thead>
                            <tr>
                                <th>Nombre Apellidos</th>
                                <th>telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($resultado as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['nombre']; ?>
                                    <?php echo $row['apellido']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                                    <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
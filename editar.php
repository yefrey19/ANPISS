<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];
$activo = 1;

$query = $con->prepare("SELECT * FROM tblusuario WHERE id = :id AND activo=:activo");
$query->execute(['id' => $id, 'activo' => $activo]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: usuarios.php");
}

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
    <main class="contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>𝐄𝐝𝐢𝐭𝐚𝐫 𝐮𝐬𝐮𝐚𝐫𝐢𝐨</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Nombre</label>
                            <input type="text" id="codigo" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required autofocus>
                        </div>

                        <div class="col-md-4">
                            <label for="descripcion" class="form-label">Apellido</label>
                            <input type="text" id="descripcion" name="apellido" class="form-control" value="<?php echo $row['apellido']; ?>" required>
                        </div>

                        <div class="col-md-4">
                            <label for="stock" class="form-label">Documento</label>
                            <input type="number" id="stock" name="documento" value="<?php echo $row['documento']; ?>" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" id="correo" name="correo" value="<?php echo $row['correo']; ?>" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="stock" class="form-label">Telefono</label>
                            <input type="number" id="stock" name="telefono" value="<?php echo $row['telefono']; ?>" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="stock" class="form-label">Edad</label>
                            <input type="number" id="stock" name="edad" value="<?php echo $row['edad']; ?>" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="stock" class="form-label">Cargo</label>
                            <input type="text" id="stock" name="cargo" value="<?php echo $row['cargo']; ?>" class="form-control" require>
                        </div>

                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="usuarios.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
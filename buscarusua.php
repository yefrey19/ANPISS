<?php


if ($_POST){
        require ('conexion.php');
        $db = new Database();
        $con = $db->conectar();
        $id = $_POST['buscar'];
        $SQL = "SELECT id, nombre, apellido, documento, correo, telefono, edad, cargo from tblusuario WHERE nombre = :nom";
        $stmt = $con -> prepare($SQL);
        $result = $stmt -> execute (array(':nom' => $id));
        $rows = $stmt ->fetchAll(\PDO::FETCH_OBJ);
        if (count($rows)){
    
            foreach ($rows AS $rows) {
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
    
    <title>Document</title>
</head>
<body>
<div class="busqueda">
        <div class="search">
            <form role="form" action="buscarusua.php" method="POST">
                <input type="text" name="buscar" id="busqueda" placeholder="Buscar" required>
                <button type="submit" value="Buscar" class="search_button">Buscar</button>
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
                        <form class="row g-3" action="guarda.php">
                            <h2><?php print("Nombres y Apellidos: ".$rows->nombre." ".$rows->apellido)?></h2>

                                <div class="col-md-12 col-1">
                                    <a class="btn btn-secondary btn-1" href="editar.php?id=<?php print(".$rows->id") ?>">Editar</a>
                                </div>
                        </form>
                    </div>
                </div>
    </main>
</body>
</html>
            <?php
            }
        }else{
            echo "<script> alert('Valor no valido.');window.location= 'usuarios.php' </script>";
        }
    }

?>

                                    <a href="eliminar.php?id=<?php echo $row['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="25" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                                        <line x1="4" y1="7" x2="20" y2="7" />
                                                                                        <line x1="10" y1="11" x2="10" y2="17" />
                                                                                        <line x1="14" y1="11" x2="14" y2="17" />
                                                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                                        </svg></a></td>
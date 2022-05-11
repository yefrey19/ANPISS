<?php
    include('conexion.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/styles.css" rel="stylesheet">
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

<div class="botones-usua">
    <div class="boton-usuario">
        <a href="registrarusu.html"><button> Registrar usuario</button></a>
    </div>
</div>
    <div class="espacio-table">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th >Nombre</th>
            <th >Apellido</th>
            <th >Acciones</th>
            </tr>
        </thead>

<?php
    $sql="SELECT * FROM tblusuario";
    $result= mysqli_query($conexion, $sql);

    while($mostrar = mysqli_fetch_array($result)){

    
?>

        <tbody>
            <tr>
            <td><?php echo $mostrar['usId']?></td>
            <td><?php echo $mostrar['usNombre']?></td>
            <td><?php echo $mostrar['usApellido']?></td>
            <td>
                <a href="editar.php">Editar</a>
                <form action="eliminar.php" method="POST">  
                    <input type="hidden" value="<?php echo $mostrar['usId']?>" name="txtID"readonly>  
                    <input class="btn" type="submit" value="ELIMINAR" name="btnELIMINAR">
                </form>
            </td>
            </tr>

            <?php
    }
            ?>
        </tbody>
    </div>
</table>
</body>
</html>
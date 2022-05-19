<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$activo = 1;

$comando = $con->prepare ("SELECT * FROM tblempaques");
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empaques</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/Doc.css" rel="stylesheet">
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
    
       <a href="iniciodoc.html" target="Anpiss"><svg xmlns="http://www.w3.org/2000/svg" class=" log-usua icon icon-tabler icon-tabler-text-wrap" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="18" x2="9" y2="18" />
            <path d="M4 12h13a3 3 0 0 1 0 6h-4l2 -2m0 4l-2 -2" />
        </svg></a> 


        <div class="button">
            <input class="Registrar" type="button" placeholder="registrar" name="registrar" value="Registrar de limpieza cocina" id="Registrar3">
        </div>
    
    <table>
    <tr>

        <th>Fecha</th>
        <th>Empaques que llegan a a la cocina</th>
        <th>Condiciones sanitarias del empaque</th>
        <th>Proveedor</th>
        <th>Quien recibe el pedido</th>
        <th>Supervisor</th>
        <th>Acciones</th>
    </tr>
    <tbody>
         <?php
            foreach ($resultado as $row) {
        ?>
    <tr>
        <td><?php echo $row['fecha']; ?>
        <?php echo $row['empaques']; ?></td>
        <td><?php echo $row['condiciones']; ?></td>
        <td><?php echo $row['proveedor']; ?></td>
        <td><?php echo $row['recibe']; ?></td>
        <td><?php echo $row['supervisor']; ?></td>
        <td><a href="ver.php?id=<?php echo $row['id']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="25" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                            <circle cx="12" cy="12" r="2" />
                                                            <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                                            </svg></a>
        <a href="editar.php?id=<?php echo $row['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="25" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                                                        <path d="M16 5l3 3" />
                                                        <path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" />
                                                        </svg>
        </td>
    </tr>
    <?php } ?>
</tbody>

        
</table>

<div class="butons">
  <a href="reporteempaques.html"><button>Reporte en EXCEL</button></a>

  <a href="reporteempaques.html"><button>Reporte en PDF</button></a>

</div>





<div class="modal5"> 
  <div class="modal0">
  <div class="titulo"> 
      <div class="Limpieza">
     <label for="">Fecha</label>
     <input type="text"> </input>
  </div>

<script src="./javascript/modal5.js"></script>c
</body>
</html>
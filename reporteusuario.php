<?php
ob_start();
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
<?php
require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$activo = 1;

$comando = $con->prepare("SELECT * FROM tblusuario WHERE activo=:mi_activo ORDER BY id ASC");
$comando->execute(['mi_activo' => $activo]);
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>

<style>
    table, th, td {
    border: solid black 1px;
    border-collapse: collapse;
    text-align: center;
    font-size: 15px;
}
th {
    background-color: #b4b4f3;
    height: 40px;
    width: 10rem;
    font-weight: lighter;
    text-shadow: 0 1px 0 #38678f;
    border: 1px solid #38678f;
    box-shadow: inset 0px 1px 2px #568ebd;
    transition: all 0.2s;
    font-size: 18px;}

table{
    width: 80%;
}


  
</style>

<main class="contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h1 style="text-align: center;">Reporte Usuarios</h1>
                </div>
            </div>
           
            <div class="row py-3">
                <div class="col"   style="margin-left: 2rem;">
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre Apellidos</th>
                                <th>Documento</th>
                                <th>Correo</th>
                                <th>Edad</th>
                                <th>Telefono</th>
                                <th>Cargo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($resultado as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['nombre']; ?>
                                    <?php echo $row['apellido']; ?></td>
                                    <td><?php echo $row['documento']; ?></td>
                                    <td><?php echo $row['correo']; ?></td>
                                    <td><?php echo $row['edad']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['cargo']; ?></td>
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
<?php
$html=ob_get_clean();

require_once 'libreria/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream("reporteusuario.pdf", array("Attachment" => false));

?>
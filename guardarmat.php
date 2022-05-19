<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {


    $n° = $_POST['n°'];
    $fecha = $_POST['fecha'];
    $materia = $_POST['materia'];
    $cantidad = $_POST['cantidad'];
    $caracorga = $_POST['caracorga'];
    $temperatura = $_POST['temperatura'];
    $estado = $_POST['estado'];
    $proveedor = $_POST['proveedor'];
    $verifico= $_POST['verifico'];
    $observaciones = $_POST['observaciones'];
    $activo = $_POST['activo'];
   
   

    $query = $con->prepare("UPDATE tblmateriaprima SET n°=?, fecha=?, materia=?, cantidad=?, caracorga=?, temperatura=?, estado=? proveedor=? verifico=? observaciones=? activo=? WHERE id=?");
    $resultado = $query->execute(array($n°, $fecha, $materia, $cantidad, $caracorga, $temperatura, $estado, $proveedor, $verifico, $observaciones, $activo, ));

    if ($resultado) {
        $correcto = true;
    }
} else {

    $n° = $_POST['n°'];
    $fecha = $_POST['fecha'];
    $materia = $_POST['materia'];
    $cantidad = $_POST['cantidad'];
    $caracorga = $_POST['caracorga'];
    $temperatura = $_POST['temperatura'];
    $estado = $_POST['estado'];
    $proveedor = $_POST['proveedor'];
    $verifico = $_POST['verifico'];
    $observaciones = $_POST['observaciones'];
    $activo = $_POST['activo'];
 
    $query = $con->prepare("INSERT INTO tblmateriaprima (n°, fecha, materia, cantidad, caracorga, temperatura, estado, proveedor, verifico, observaciones, activo 1)");
    $resultado = $query->execute(array('n°' => $n°, 'mat' => $materia,'can' => $cantidad,'car' => $caracorga, 'tem' => $temperatura, 'est' => $estado, 'pro' => $proveedor, 'ver' => $verifico, 'obs'  => $observaciones, 'act' => $activo, ));

    if ($resultado) {
        $correcto = true;
        echo $con->lastInsertId();
    }
}

header("location:materiaprima.php");
?>

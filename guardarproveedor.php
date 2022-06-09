<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $query = $con->prepare("UPDATE tblproveedor SET nombre=?, direccion=?, correo=?, telefono=? WHERE id=?");
    $resultado = $query->execute(array($nombre,  $direccion, $correo, $telefono,  $id));

    if ($resultado) {
        $correcto = true;
    }
} else {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $query = $con->prepare("INSERT INTO tblproveedor (nombre,  direccion, correo, telefono,  activo) VALUES (:nom, :dir, :cor, :tel, 1)");
    $resultado = $query->execute(array('nom' => $nombre,'dir' => $direccion,'cor' => $correo, 'tel' => $telefono, ));

    if ($resultado) {
        $correcto = true;
        echo $con->lastInsertId();
    }
}

header("location:proveedores.php");
?>

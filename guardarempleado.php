<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $cargo = $_POST['cargo'];

    $query = $con->prepare("UPDATE tblempleado SET nombre=?, apellido=?, documento=?, correo=?, telefono=?, edad=?, cargo=? WHERE id=?");
    $resultado = $query->execute(array($nombre, $apellido, $documento, $correo, $telefono, $edad, $cargo, $id));

    if ($resultado) {
        $correcto = true;
    }
} else {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $cargo = $_POST['cargo'];

    $query = $con->prepare("INSERT INTO tblempleado (nombre, apellido, documento, correo, telefono, edad, cargo, activo) VALUES (:nom, :ape, :doc, :cor, :tel, :ed, :car, 1)");
    $resultado = $query->execute(array('nom' => $nombre, 'ape' => $apellido,'doc' => $documento,'cor' => $correo, 'tel' => $telefono, 'ed' => $edad, 'car' => $cargo));

    if ($resultado) {
        $correcto = true;
        echo $con->lastInsertId();
    }
}

header("location:empleado.php");
?>

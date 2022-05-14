<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];

$query = $con->prepare("DELETE FROM tblusuario WHERE id=?");
$query->execute([$id]);
$numElimina = $query->rowCount();

header("location:usuarios.php");

?>


<?php

include('conexion.php');

$ID=$_POST['txtID'];
mysqli_query($conexion, "DELETE FROM tblusuario where usId='$ID'") or die("error al eliminar");
mysqli_close($conexion);
header("location:usuarios.php");

?>
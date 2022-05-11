<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('conexion.php');

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$documento=$_POST['txtDocumento'];
$correo=$_POST['txtCorreo'];
$telefono=$_POST['txtTelefono'];
$edad=$_POST['txtEdad'];
$cargo=$_POST['txtCargo'];
$contraseña=$_POST['txtContraseña'];
$conficontraseña=$_POST['txtConficontraseña'];

$consulta="INSERT INTO `tblusuario`(`usNombre`, `usApellido`, `usDoc`, `usCorreo`, `usTel`, `usEdad`, `usCargo`, `usContraseña`, `usConficon`)
VALUES ('$nombre', '$apellido', '$documento', '$correo', '$telefono', '$edad', '$cargo', '$contraseña', '$conficontraseña')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo '<script language="javascript">alert("El usuario se ha registrado correctamente"); window.location.href="registrarusu.html"</script>';


mysqli_close($conexion);





?>
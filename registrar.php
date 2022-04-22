

<?php
include_once('conexion.php');

$nombres=$_POST['nombres'];
$apellidos =$_POST['apellidos'];
$documento =$_POST['documento'];
$correo =$_POST['correo'];
$telefono =$_POST['telefono'];
$edad = $_POST['edad'];
$cargo =$_POST['cargo'];
$contraseña =$_POST['contraseña'];
$conficontraseña =$_POST['conficontraseña'];

echo "los datos son los siguientes: ";
echo "$nombres,$apellidos,$documento,$correo,$telefono,$edad,$cargo,$contraseña,$conficontraseña";



$conectar=conn();
$sql="INSERT INTO tblusuario(nombres,apellidos,documento,correo,telefono,edad,cargo,contraseña,conficontraseña) 
VALUES('$nombres','$apellidos','$documento','$correo','$telefono','$edad','$cargo','$contraseña','$conficontraseña')";

$result = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), F_USER_ERROR);

echo '<script language="javascript">alert("El usuario se ha registrado correctamente"); window.location.href="registrarusu.html"</script>';

?>

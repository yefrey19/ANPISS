<?php
include('conexionlogin.php');

$correo = $_POST['txtcorreo'];

$queryusuario 	= mysqli_query($conn,"SELECT * FROM tblusuario WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarpass 	= $mostrar['contraseña'];

$paracorreo 		= $correo;
$titulo				= "Recuperar contraseña";
$mensaje			= $enviarpass;
$tucorreo			= "From:ypena988@misena.edu.co";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviado');window.location= 'iniciosesion.html' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'iniciosesion.html' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'iniciosesion.html' </script>";
}
/*VaidrollTeam*/
?>
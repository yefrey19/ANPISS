<?php

include('conexionlogin.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];

//Para iniciar sesión

$queryusuario = mysqli_query($conn,"SELECT * FROM tblusuario WHERE correo ='$correo' and contraseña = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1)  
	{ 
<<<<<<< HEAD
	echo	"<script> window.location= 'home.html' </script>";
=======
	echo	"<script>window.location= 'home.html' </script>";
>>>>>>> 8400a9be77f267e54806f0d8d7e4df8c94c80442
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'iniciosesion.html' </script>";
	}

/*VaidrollTeam*/
?>
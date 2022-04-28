<?php
function conn(){
    
    $host="localhost";
    $usuariodb="root";
    $pass="";
    $dbname="ANPISS";

    $conectar = mysqli_connect($host, $usuariodb, $pass, $dbname);

    mysqli_select_db($con,$db);
    return $con;
}
?>
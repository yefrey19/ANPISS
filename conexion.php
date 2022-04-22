<?php
function conn(){
    
    $host="localhost";
    $usuariodb="root";
    $pass="";
    $dbname="anpiss";

    $conectar = mysqli_connect($host, $usuariodb, $pass, $dbname);
    return $conectar;
}
?>
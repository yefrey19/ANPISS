<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $limpieza = $_POST['limpieza'];
    $desinfeccion = $_POST['desinfeccion'];
    $nombre = $_POST['nombre'];
    $choque = $_POST['choque'];
    $pisos = $_POST['pisos'];
    $paredes = $_POST['paredes'];
    $estufas = $_POST['estufas'];
    $puertas = $_POST['puertas'];
    $mesas = $_POST['mesas'];
    $sillas = $_POST['sillas'];
    $techos = $_POST['techos'];
    $observaciones = $_POST['observaciones'];

    $query = $con->prepare("UPDATE tbllimpieza SET limpieza=?, desinfeccion=?, nombre=?, choque=?, pisos=?, paredes=?, estufas=?, puertas=?, mesas=?, sillas=?, ventiladores=?, techos=?, observaciones=?, WHERE id=?");
    $resultado = $query->execute(array( $limpieza, $desinfeccion, $nombre, $choque, $pisos, $paredes, $estufas, $puertas, $mesas, $sillas, $techos, $observaciones, $id));

    if ($resultado) {
        $correcto = true;
    }
} else {
    $fecha = $_POST['fecha'];
    $limpieza = $_POST['limpieza'];
    $desinfeccion = $_POST['desinfeccion'];
    $nombre = $_POST['nombre'];
    $choque = $_POST['choque'];
    $pisos = $_POST['pisos'];
    $paredes = $_POST['paredes'];
    $estufas = $_POST['estufas'];
    $puertas = $_POST['puertas'];
    $mesas = $_POST['mesas'];
    $sillas = $_POST['sillas'];
    $techos = $_POST['techos'];
    $observaciones = $_POST['observaciones'];

    $query = $con->prepare("INSERT INTO tbllimpieza (fecha, limpieza, desinfeccion, nombre, choque, pisos, paredes, estufas, puertas, mesas, sillas, techos, observaciones, activo) VALUES (:fech,:lim, :desi, :nomd, :cho, :pis, :par, :est, :pue, :mes, :sil, :tec, :obs, 1)");
    $resultado = $query->execute(array( 'fech' =>$fecha,'lim' => $limpieza, 'desi' => $desinfeccion,'nomd' => $nombre,'cho' => $choque, 'pis' => $pisos, 'par' => $paredes, 'est' => $estufas, 'pue' => $puertas, 'mes' => $mesas, 'sil' => $sillas, 'tec' => $techos, 'obs' => $observaciones));

    if ($resultado) {
        $correcto = true;
        echo $con->lastInsertId();
    }
}

header("location:DocLimpieza.php");
?>

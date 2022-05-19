<?php

require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $limpieza = $_POST['limpieza'];
    $desinfeccion = $_POST['desinfeccion'];
    $nomdesinfectante = $_POST['nomdesinfeccion'];
    $choquedesinfeccion = $_POST['choquedesinfeccion'];
    $pisos = $_POST['pisos'];
    $paredes = $_POST['paredes'];
    $estufas = $_POST['estufas'];
    $puertas = $_POST['puertas'];
    $mesas = $_POST['mesas'];
    $sillas = $_POST['sillas'];
    $techos = $_POST['techos'];
    $observaciones = $_POST['observaciones'];
    $id = $_POST['id'];

    $query = $con->prepare("UPDATE tbllimpieza SET id=?, limpieza=?, desinfeccion=?, nomdesinfectante=?, choquedesinfeccion=?, pisos=?, paredes=?, estufas=?, puertas=?, mesas=?, sillas=?, ventiladores=?, techos=?, observaciones=?, WHERE id=?");
    $resultado = $query->execute(array( $limpieza, $desinfeccion, $nomdesinfectante, $choquedesinfeccion, $pisos, $paredes, $estufas, $puertas, $puertas, $mesas, $sillas, $ventiladores, $techos, $observaciones, $id));

    if ($resultado) {
        $correcto = true;
    }
} else {
    $id = $_POST['id'];
    $limpieza = $_POST['limpieza'];
    $desinfeccion = $_POST['desinfeccion'];
    $nomdesinfectante = $_POST['nomdesinfeccion'];
    $choquedesinfeccion = $_POST['choquedesinfeccion'];
    $pisos = $_POST['pisos'];
    $paredes = $_POST['paredes'];
    $estufas = $_POST['estufas'];
    $puertas = $_POST['puertas'];
    $mesas = $_POST['mesas'];
    $sillas = $_POST['sillas'];
    $techos = $_POST['techos'];
    $observaciones = $_POST['observaciones'];
    $id = $_POST['id'];

    $query = $con->prepare("INSERT INTO tbllimpieza (limpieza, desinfeccion, nomdesinfectante, choquedesinfectante, pisos, paredes, estufas, puertas, mesas, sillas, ventiladores, techos, obseraciones, id) VALUES (:lim, :desi, :nomd, :cho, :pis, :par, :est, :pue, :mes, :sil, :ven, :tec, :obs 1)");
    $resultado = $query->execute(array('lim' => $limpieza, 'des' => $desinfeccion,'nomd' => $nomdesinfectante,'cho' => $choquedesinfeccion, 'pis' => $pisos, 'par' => $paredes, 'est' => $estufas, 'pue' => $puertas, 'mes' => $mesas, 'sil' => $sillas, 'ven' => $ventiladores, 'tec' => $techos, 'obs' => $observaciones));

    if ($resultado) {
        $correcto = true;
        echo $con->lastInsertId();
    }
}

header("location:usuarios.php");
?>

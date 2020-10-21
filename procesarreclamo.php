<?php
require_once ("conexion/db.php");
require_once ("conexion/conexion.php");

$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$tiporeclamo = $_POST['tiporeclamo'];
$partida = $_POST['partida'];
$calle = $_POST['calle'];
$altura = $_POST['altura'];
$entrecalle1 = $_POST['entrecalle1'];
$entrecalle2 = $_POST['entrecalle2'];
$barrio = $_POST['barrio'];
$localidad = $_POST['localidad'];
$comentario = $_POST['comentario'];
$estadoreclamo = 'Pendiente';
$fecha = $_POST['fecha'];

$sql = "INSERT INTO cuari (apellido, nombre, documento, telefono, tipo_reclamo, partida, calle, altura, entrecalle1, entrecalle2, barrio, localidad, comentario, estadoreclamo, fecha) VALUES ('$apellido', '$nombre', '$documento', '$telefono', '$tiporeclamo','$partida', '$calle', '$altura', '$entrecalle1', '$entrecalle2', '$barrio', '$localidad', '$comentario', '$estadoreclamo', '$fecha')";

if ($conn->query($sql) === TRUE) {
  header("Location:confirm.php");
} else {
  //header("Location:pantallaerror.php");
  echo "Error: " . $sql . "<br>" . $conn->error; //Redireccion de la página

}
?>
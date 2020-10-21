<?php
ob_start();
require_once ("../conexion/db.php");
require_once ("../conexion/conexion.php");

$id_reclamo = $_POST['id_reclamo'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$seguimiento = $_POST['seguimiento'];

$sql = "INSERT INTO estados_reclamos (id_reclamo, fecha, estado, seguimiento) VALUES ('$id_reclamo', '$fecha', '$estado', '$seguimiento')";

if ($conn->query($sql) === TRUE) {

	$q = "UPDATE cuari SET estadoreclamo='$estado' WHERE id_reclamo='$id_reclamo'";

	if ($conn->query($q) === TRUE) {
		
		header("Location:../confirm.php");
	}

} else {
	
	echo "Error: " . $sql . "<br>" . $conn->error; //Redireccion de la página
}

$conn->close();
ob_end_flush();
?>
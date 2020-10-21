<?php
ob_start();
require_once ("../conexion/db.php");
require_once ("../conexion/conexion.php");
$id= $_GET['id'];
$estadoreclamo = "Finalizado"; 
$sql = "UPDATE cuari SET estadoreclamo='$estadoreclamo' WHERE id_reclamo='$id'";
if ($conn->query($sql) === TRUE) {
	header("Location:../index.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error; //Redireccion de la página
}
$conn->close();
ob_end_flush();
?>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Falló la conexión: " . $conn->connect_error);
}
?> 
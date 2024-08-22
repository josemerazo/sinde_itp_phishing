<?php
$servername = "localhost";
$username = "root";
$password = "VRhfh!M!.v1N"; // Cambia esto por tu contraseña de MySQL
$dbname = "sinde";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

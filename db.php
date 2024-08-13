<?php
$servername = "localhost:3307";
$username = "root";
$password = "Nokia2005"; // Cambia esto por tu contraseña de MySQL
$dbname = "sinde";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

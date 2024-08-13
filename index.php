<?php
include 'db.php';

//Obtener la IP del cliente
$ip = $_SERVER['REMOTE_ADDR'];

//Obtener el parámetro 'mail' desde la URL
if (isset($_GET['mail'])) {
    $mail = $_GET['mail'];
} else {
    die("El parámetro 'mail' es obligatorio.");
}

//Preparar y ejecutar la consulta para insertar el registro en la base de datos
$stmt = $conn->prepare("INSERT INTO registros (ip, mail) VALUES (?, ?)");
$stmt->bind_param("ss", $ip, $mail);

if ($stmt->execute()) {
    echo "Gracias por visitarnos";
} else {
    echo "Error " . $stmt-error;
}

$stmt->close();

//Contar el número de visitas
$result = $conn->query("SELECT COUNT(1) as total_visitas FROM registros");
$row = $result->fetch_assoc();
echo "Total de visitas  ". $row['total_visitas'];

$conn->close();

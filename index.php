
<?php
include 'db.php';

//Obtener la IP del cliente
$ip = $_SERVER['REMOTE_ADDR'];
$mail='';

//Obtener el parámetro 'mail' desde la URL
if (isset($_GET['mail'])) {
    $mail = $_GET['mail'];
    //echo "El mail es ". $mail . " ". $ip;
} else {
    die("El parámetro 'mail' es obligatorio.");
}

//Preparar y ejecutar la consulta para insertar el registro en la base de datos
$stmt = $conn->prepare("INSERT INTO registros (ip, mail) VALUES (?, ?)");
$stmt->bind_param("ss", $ip, $mail);
//var_dump($stmt);
if ($stmt->execute()) {
    echo "Gracias por visitarnos";
} else {
    echo "Error " . $stmt-error;
}

$stmt->close();


$conn->close();

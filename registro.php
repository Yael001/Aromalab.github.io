<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perfumes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST["username"];
$password = $_POST["password"];

// Insertar datos en la tabla
$sql = "INSERT INTO tbcuentas (nombre, contraseña)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirigir al usuario a la página "bien.php"
    header("Location: principal.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

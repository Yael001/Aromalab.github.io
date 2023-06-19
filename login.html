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

// Verificar si los datos ingresados existen en la tabla
$sql = "SELECT * FROM tbcuentas WHERE nombre='$username' AND contraseña='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Los datos son correctos, redirigir al usuario a la página "bien.php"
    header("Location: principal.php");
    exit;
} else {
    // Los datos son incorrectos, mostrar un mensaje de error
    echo "<script>alert('No se encontraron datos');</script>";
}

$conn->close();
?>

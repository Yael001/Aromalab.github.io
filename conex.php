<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados desde el formulario
    $satisfaccion = $_POST["satisfaccion"];
    $mejoras = $_POST["mejoras"];
    $recomendar = $_POST["recomendar"];

    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root", "", "perfumes");

    // Verificar si la conexión fue exitosa
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Insertar los datos en la tabla
    $sql = "INSERT INTO tbclientes (satisfaccion, mejoras, recomendar) VALUES ('$satisfaccion', '$mejoras', '$recomendar')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al insertar los datos: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
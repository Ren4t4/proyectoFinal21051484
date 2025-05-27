<?php
$host = "app-servidor21051484.mysql.database.azure.com";
$usuario = "rootits@app-servidor21051484"; // Debe incluir el nombre del servidor
$contrasena = "Pi-21051484"; // reemplaza con tu contraseña real
$base_datos = "calificaciones";

// Crear conexión con SSL
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos, 3306, NULL, MYSQLI_CLIENT_SSL);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

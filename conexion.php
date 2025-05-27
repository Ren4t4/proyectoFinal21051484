<?php
$host = "40.118.247.100";  // IP privada del servidor MySQL
$usuario = "rootits";  // Cambia esto por tu usuario de MySQL
$contrasena = "rootits1";  // Cambia esto por tu contraseña de MySQL
$base_datos = "calificaciones";

$host = "sqlserver-210512484.mysql.database.azure.com";
$usuario = "rootits@sqlserver-210512484";
$contrasena = "Pi-21051484";
$base_datos = "calificaciones";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

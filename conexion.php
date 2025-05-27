<?php
$host = "app-servidor21051484.mysql.database.azure.com";
$usuario = "rootits@app-servidor21051484";
$contrasena = "Pi-21051484";
$base_datos = "calificaciones";
$puerto = 3306;

// Initialize MySQLi with SSL
$conexion = mysqli_init();
mysqli_ssl_set($conexion, NULL, NULL, "/home/site/wwwroot/cacert.pem", NULL, NULL);

// Attempt connection
mysqli_real_connect(
    $conexion,
    $host,
    $usuario,
    $contrasena,
    $base_datos,
    $puerto,
    NULL,
    MYSQLI_CLIENT_SSL
);

if (mysqli_connect_errno()) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "¡Conexión exitosa!";
?>

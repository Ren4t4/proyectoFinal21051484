<?php
$host = "app-servidor21051484.mysql.database.azure.com";
$usuario = "rootits@app-servidor21051484";
$contrasena = "Pi-21051484";
$base_datos = "calificaciones";
$puerto = 3306;

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/home/site/wwwroot/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $host, $usuario, $contrasena, $base_datos, 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>


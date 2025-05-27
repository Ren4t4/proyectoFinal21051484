<?php
// Inicializar conexión
$conn = mysqli_init();

// Configurar SSL con certificado CA (de Azure)
mysqli_ssl_set($conn, NULL, NULL, "/home/site/wwwroot/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);

// Intentar conexión con SSL
mysqli_real_connect(
    $conn,
    "app-servidor21051484.mysql.database.azure.com",  // Hostname
    "rootits@app-servidor21051484",                   // Usuario completo
    "Pi-21051484",                             // Contraseña
    "calificaciones",                                 // Base de datos
    3306,                                             // Puerto
    NULL,
    MYSQLI_CLIENT_SSL                                 // Requiere SSL
);

// Verificar conexión
if (mysqli_connect_errno()) {
    die("Falló la conexión: " . mysqli_connect_error());
} else {
    echo "✅ Conexión exitosa a la BD Azure MySQL con SSL";
}
?>

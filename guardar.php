<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$materia = $_POST['materia'];
$calificacion = $_POST['calificacion'];

$sql = "INSERT INTO registros (nombre, materia, calificacion) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssi", $nombre, $materia, $calificacion);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Error al guardar: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>

<?php
// Arreglo para almacenar calificaciones (esto se borra al recargar, solo demostrativo)
$registros = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? '';
    $materia = $_POST["materia"] ?? '';
    $calificacion = $_POST["calificacion"] ?? '';

    // Validación básica
    if ($nombre && $materia && is_numeric($calificacion)) {
        // Guardamos temporalmente los datos (en la práctica se usaría base de datos)
        $registros[] = [
            "nombre" => $nombre,
            "materia" => $materia,
            "calificacion" => $calificacion
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Calificaciones</title>
</head>
<body>
    <h1>Registrar Calificación de Estudiante</h1>

    <form method="post">
        <label>Nombre del Estudiante:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Materia:</label><br>
        <input type="text" name="materia" required><br><br>

        <label>Calificación (0 a 100):</label><br>
        <input type="number" name="calificacion" min="0" max="100" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <?php if (!empty($registros)): ?>
        <h2>Registro Capturado:</h2>
        <table border="1" cellpadding="5">
            <tr>
                <th>Nombre</th>
                <th>Materia</th>
                <th>Calificación</th>
            </tr>
            <?php foreach ($registros as $r): ?>
                <tr>
                    <td><?= htmlspecialchars($r['nombre']) ?></td>
                    <td><?= htmlspecialchars($r['materia']) ?></td>
                    <td><?= htmlspecialchars($r['calificacion']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>

<?php
// Obtener el ID del coche de la URL
$coche_id = isset($_GET['id']) ? $_GET['id'] : die('ID del coche no especificado.');

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Obtener los detalles del coche de la base de datos
$cocheDetalles = obtenerDetallesDelCoche($coche_id);

if ($cocheDetalles) {
    // Mostrar los detalles del coche
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalles del Coche</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1>Detalles del Coche</h1>';

        if (array_key_exists('imagen', $cocheDetalles)) {
            echo '<img src="' . $cocheDetalles['imagen'] . '" alt="Foto del coche">';
        } else {
            echo '<p>Imagen no disponible</p>';
        }
        
echo   '<p>Modelo: ' . $cocheDetalles['modelo'] . '</p>
        <p>Fecha: ' . $cocheDetalles['fecha'] . '</p>
        <p>Precio: $' . number_format($cocheDetalles['precio'], 2) . '</p>
        <p>Color: ' . $cocheDetalles['color'] . '</p>
        <p>Kilometraje: ' . $cocheDetalles['kilometraje'] . ' km</p>
    </body>
    </html>';
} else {
    echo 'Coche no encontrado.';
}
?>





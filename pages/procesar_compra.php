<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $coche_id = $_POST['coche_id'];
    $modelo = $_POST['modelo'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    
    // Incluir el archivo de conexión a la base de datos
    include 'conexion.php';
    
    // Realizar acciones necesarias, como actualizar la base de datos
    realizarCompra($coche_id, $modelo, $nombre, $email, $telefono);
    
    // Redireccionar a una página de confirmación
    header('Location: confirmacion.php');
    exit;
} else {
    // Si alguien intenta acceder directamente a este script sin enviar el formulario, redirige a la página de inicio
    header('Location: index.php');
    exit;
}
?>

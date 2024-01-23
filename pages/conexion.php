<?php
$servername = "127.0.0.1";
$username = "compraventacoches";
$password = "Tizon2005*";
$dbname = "compraventacoches";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Función para obtener detalles del coche
function obtenerDetallesDelCoche($coche_id) {
    global $conn;
    $coche_id = mysqli_real_escape_string($conn, $coche_id); // Para evitar SQL injection

    $sql = "SELECT * FROM coches WHERE id = $coche_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false; // Devuelve falso si no se encuentra el coche
    }
}

// Función para realizar la compra
function realizarCompra($coche_id, $modelo, $nombre, $email, $telefono) {
    global $conn;

    // Puedes personalizar esta consulta de acuerdo a tu esquema de base de datos
    $sql = "INSERT INTO compras (coche_id, modelo, nombre, email, telefono) VALUES (?, ?, ?, ?, ?)";
    
    // Utilizando sentencia preparada para prevenir SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $coche_id, $modelo, $nombre, $email, $telefono);

    if ($stmt->execute()) {
        // La compra se realizó con éxito
        // Aquí puedes realizar más acciones, como enviar un correo de confirmación, etc.
        echo 'Compra realizada con éxito. ¡Gracias por tu compra!';
    } else {
        // Si hay un error en la consulta SQL
        echo 'Error al realizar la compra: ' . $conn->error;
    }

    $stmt->close();
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <h2>Compra</h2>
    <form action="procesar_compra.php" method="post">
    <input type="hidden" name="coche_id" value="<?php echo $cocheDetalles['id']; ?>">
    <input type="hidden" name="modelo" value="<?php echo $cocheDetalles['modelo']; ?>">
    <!-- Agrega más campos ocultos según sea necesario -->

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" required>
    <label for="telefono">Teléfono:</label>
    <input type="tel" name="telefono" required>
    <button type="submit">Comprar</button>
</form>
</body>
</html>

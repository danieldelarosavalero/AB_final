// Evento para realizar la compra
document.getElementById('formulario-compra').addEventListener('submit', function (event) {
    event.preventDefault(); // Evitar el comportamiento predeterminado del formulario

    // Coloca aquí la lógica de compra, por ejemplo, enviar datos al servidor
    // Puedes utilizar fetch() u otras técnicas para enviar los datos al servidor

    alert('Compra realizada. ¡Gracias!');
    vaciarCarrito(); // Limpia el carrito después de realizar la compra
});


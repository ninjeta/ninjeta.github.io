<?php
// contacto.php
$title = "PereiroCortinas - Contacto";
include 'includes/../header.php';
?>

<h1>Contacto</h1>
<p>Puedes comunicarte con nosotros llenando el siguiente formulario:</p>

<form action="https://formsubmit.co/tcenric@gmail.com" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono">

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

    <!-- Campo oculto para redirección después del envío -->
    <!--<input type="hidden" name="_next" value="https://tu-dominio.com/gracias.html">  -->

   <!-- Campo oculto para definir el asunto del correo -->
    <!--<input type="hidden" name="_subject" value="Nuevo mensaje de contacto"> -->

    <button type="submit">Enviar</button>
</form>

<!--
<script>
    // Escucha el evento submit del formulario
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        // Obtén el valor del nombre ingresado en el formulario
        const nombre = document.getElementById('name').value;

        // Actualiza el campo de asunto con el nombre
        document.getElementById('subject').value = `Nuevo mensaje de contacto de ${nombre}`;
    });
</script>
-->
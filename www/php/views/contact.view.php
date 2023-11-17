<style>
    <?php include('./css/contacto.css') ?>
</style>
<div class="titulo">
    <h1>Contacto</h1>
</div>
<section>
    <form action="#" method="post" onsubmit="return mostrarConfirmacion()">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

        <input type="submit"></input>
    </form>
</section>
<script src="/js/confirmacionMensaje.js"></script>
<?php require("partials/footer.php") ?>
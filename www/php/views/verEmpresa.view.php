<?php
require("./mapa.php");
$imagen = "https://content.wepik.com/statics/30190099/preview-page0.jpg";
$nombre = "Nombre Epico";
$correo = "CorreoChingon@gmail.com";
$tel = "000000000";
?>
<style>
    <?php include('../css/verEmpresa.css') ?>
</style>

<div class="contenedor">
    <div class="datosEmpresa">
        <div class="logoEmp">
            <img src=<?= $imagen ?>>
        </div>
        <div class="datosPc">
            <p>Nombre de la empresa: <?= $nombre ?></p>
            <p>Correo de contacto: <?= $correo ?></p>
            <p>Numero de telefono: <?= $tel ?></p>
        </div>
        <div class="datosMovil">
            <p><?= $nombre ?></p>
            <p><?= $correo ?></p>
            <p><?= $tel ?></p>
        </div>

    </div>
    <div class="productos">

    </div>
    <div class="mapa">
        <h2>Localicazi&oacute;n del local</h2>
        <div id="map">
            <p id="latitud"> <?= $latitude ?> </p>
            <p id="longi"> <?= $longitude ?> </p>
        </div>
    </div>



</div>
<script src="/js/scriptMapa.js"></script>
<?php require("../php/views/partials/footer.php") ?>
<?php
require("./mapa.php");
?>
<style>
    <?php include('../css/verEmpresa.css') ?>
</style>

<div class="contenedor">
    <div class="datosEmpresa">
        <div class="logoEmp">
            <img src=<?= $empresa["Avatar"] ?>>
        </div>
        <div class="datosPc">
            <p>Nombre de la empresa: <?= $empresa["Nombre_empresa"] ?></p>
            <p>Correo de contacto: <?= $empresa["Correo"]  ?></p>
            <p>Numero de telefono: <?= $empresa["Telefono"] ?></p>
        </div>
        <div class="datosMovil">
            <p><?= $empresa["Nombre_empresa"] ?></p>
            <p><?= $empresa["Correo"] ?></p>
            <p><?= $empresa["Telefono"] ?></p>
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
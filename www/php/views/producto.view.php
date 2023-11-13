<?php require("./mapa.php"); ?>

<style>
    <?php include('../css/verProducto.css') ?>
</style>
<div class="pagina">
    <div class="verProductoCaja">
        <a href="verEmpresa.php'">
            <div class="vendedor">
                <div class="avatar">
                    <a href="/php/verEmmpresa.php?idEmpresa="><img src=<?= $logoEmpresa ?> class="avatarEmpresa"></a>
                    <p><?= $empresa ?></p>
                </div>
        </a>
        <img src="/assets/amor.png" class="corazon" id="corazon">
    </div>
    <div class="producto">
        <div class="foto"><img src=<?= $producto["Foto"] ?>></div>
        <div class="titulo">
            <p><?= $producto["Titulo"] ?></p>
        </div>
        <div class="precio">
            <h5><?= $producto["Precio"] . "€" ?></h5>
        </div>
        <div class="desc">
            <p><?= $producto["Descripcion"] ?></p>
        </div>
    </div>
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
<script src="/js/scriptVerProducto.js"></script>
<?php require("../php/views/partials/footer.php") ?>
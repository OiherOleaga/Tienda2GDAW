<?php require("./mapa.php"); ?>

<style>
    <?php include('../css/verProducto.css') ?>
</style>
<div class="pagina">
    <div class="verProductoCaja">
        <a href="verEmpresa.php">
            <div class="vendedor">
                <div class="avatar">
                    <img src=<?= $logoEmpresa ?> class="avatarEmpresa">
                    <p><?= $empresa ?></p>
                </div>
        </a>
        <img src="/assets/amor.png" class="corazon" id="corazon">
    </div>
    <div class="producto">
        <div class="foto"><img src=<?= $imagen ?>></div>
        <div class="titulo">
            <p><?= $titulo ?></p>
        </div>
        <div class="precio">
            <h5><?= $precio . "€" ?></h5>
        </div>
        <div class="desc">
            <p><?= $desc ?></p>
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
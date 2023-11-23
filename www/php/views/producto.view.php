<?php require("./php/mapa.php") ?>
<style>
    <?php include('./css/verProducto.css') ?>
</style>
<div class="pagina">
    <div class="verProductoCaja">
        <a href="verEmpresa?idEmpresa=<?= $producto["idEmpresa"] ?>">
            <div class="vendedor">
                <div class="avatarEmpresa">
                    <img src=<?= $producto["avatar_empresa"] ?> <p><?= $producto["Nombre_empresa"] ?></p>
                </div>
        </a>
        <img src=<?= $like ? "/assets/corazon.png" : "/assets/amor.png" ?> class="corazon" id="corazon">
    </div>
    <div class="producto">
        <div class="cajaProducto">
            <?php
            $arrayFotos = explode(',', $producto["Fotos"]);
            if (count($arrayFotos) > 1) {
            ?>
                <div class=" btn-left">
                    <i class="fa-solid fa-arrow-left fa-2xl"></i>
                </div>
            <?php
            }
            ?>

            <div class="container-carousel">
                <div class="carruseles" id="slider">
                    <?php
                    for ($x = 0; $x < count($arrayFotos); $x++) { ?>
                        <section class="slider-section">
                            <img src=<?= $arrayFotos[$x] ?> alt="imagen">
                        </section>
                    <?php } ?>
                </div>
            </div>
            <?php
            if (count($arrayFotos) > 1) {
            ?>
                <div class="btn-right">
                    <i class="fa-solid fa-arrow-right    fa-2xl"></i>
                </div>
            <?php
            }
            ?>

        </div>
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
<script src="/js/carrusel.js"></script>
<?php require("partials/footer.php") ?>
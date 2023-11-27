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
            <p>
                <?= $producto["Titulo"] ?>
            </p>
        </div>
        <div class="precio">
            <h5>
                <?= $producto["Precio"] . "€" ?>
            </h5>
        </div>
        <div class="desc">
            <p>
                <?= $producto["Descripcion"] ?>
            </p>
        </div>
    </div>
</div>
<div class="mapa">
    <div id="map">
        <p id="latitud">
            <?= $latitude ?>
        </p>
        <p id="longi">
            <?= $longitude ?>
        </p>
    </div>
</div>

<div class="seccion2">
    <h3>Productos similares</h3>
    <?php if (count($productosSim) <= 0) { ?>
        <div id="nada"><img src="https://es.wallapop.com/assets/images/commons/pop-no-results.svg" alt="orewingoer"><br>
            <p>Nada por aqui...</p>
        </div>
    <?php } else { ?>
        <div class="productos" id="gridProductos">
            <button class="btnIzquierda" data-container="gridProductos"><i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl"></i></button>
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <a href="/producto?idProducto=<?= $productosSim[$i]["ID"] ?>">
                    <div class="caja">
                        <div class="img"><img src=<?= $productosSim[$i]["Foto"] ?>></div>
                        <div class="bottom">
                            <h5>
                                <?= $productosSim[$i]["Precio"] . "€" ?>
                            </h5>
                        </div>
                        <div class="top">
                            <p>
                                <?= $productosSim[$i]["Titulo"] ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <button class="btnDerecha" data-container="gridProductos"><i class="fa-solid fa-arrow-right fa-beat-fade fa-2xl"></i></button>
        <?php } ?>
        </div>
</div>


<script src="/js/scriptMapa.js"></script>
<script src="/js/scriptVerProducto.js"></script>
<script src="/js/carrusel.js"></script>
<?php require("partials/footer.php") ?>
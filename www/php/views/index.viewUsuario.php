<div class="seccion1">
    <h3>Compra y vende artículos en InfiniteChoice</h3>
    <p>una comunidad que lleva años generando impacto del bueno</p>
    <form action="/php/categorias.php">
        <div class="buscar"> <input class="search" type="search" placeholder="" name="titulo">
        </div>
        <input class="button" type="submit" value="Buscar">
    </form>
</div>
<div class="seccion2">
    <h3>Lo mejor, al mejor precio</h3>
    <div class="productos" id="gridProductos">
        <button class="btnIzquierda" data-container="gridProductos"><i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl"></i></button>
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <a href="/producto?idProducto=<?= $productos[$i]["ID"] ?>">
                <div class="caja">
                    <div class="img"><img src=<?= $productos[$i]["Foto"] ?>></div>
                    <div class="bottom">
                        <h5>
                            <?= $productos[$i]["Precio"] . "€" ?>
                        </h5>
                    </div>
                    <div class="top">
                        <p>
                            <?= $productos[$i]["Titulo"] ?>
                        </p>
                    </div>
                </div>
            </a>
        <?php } ?>
        <button class="btnDerecha" data-container="gridProductos"><i class="fa-solid fa-arrow-right fa-beat-fade fa-2xl"></i></button>
    </div>
</div>
<div class="seccion3">
    <h3>A mucha gente le gustan</h3>
    <button class="btnIzquierda" data-container="gridProductos2"><i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl"></i></button>
    <div class="productos" id="gridProductos2">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <a href="index.php">
                <div class="caja">
                    <div class="img"><img src=<?= $productos[$i]["Foto"] ?>></div>
                    <div class="bottom">
                        <h5>
                            <?= $productos[$i]["Precio"] . "€" ?>
                        </h5>
                    </div>
                    <div class="top">
                        <p>
                            <?= $productos[$i]["Titulo"] ?>
                        </p>
                    </div>
                </div>
            </a>
        <?php } ?>
        <button class="btnDerecha" data-container="gridProductos2"><i class="fa-solid fa-arrow-right fa-beat-fade fa-2xl"></i></button>
    </div>
</div>
<script src="/js/desplazamineto.js"></script>
<?php require("php/views/partials/footer.php") ?>
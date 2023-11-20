<div class="caja">
    <h3>Tus favoritos</h3>
    <div class="productos" id="productos">
        <?php for ($i = 0; $i < count($productos); $i++) { ?>
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
    </div>
</div>
<?php
require("./mapa.php");
?>
<style>
    <?php include('../css/verEmpresa.css') ?>
</style>
<div class="datosEmpresa">
    <div class="logoEmp">
        <img src=<?= $empresa["Avatar"] ?>>
    </div>
    <div class="datosPc">
        <p>Nombre de la empresa:
            <?= $empresa["Nombre_empresa"] ?>
        </p>
        <p>Correo de contacto:
            <?= $empresa["Correo"] ?>
        </p>
        <p>Numero de telefono:
            <?= $empresa["Telefono"] ?>
        </p>
    </div>
</div>
<div class="seccion2">
    <h3>Todos los productos</h3>
    <div class="productos">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <a href="/php/producto.php?idProducto=<?= $productos[$i]["ID"] ?>">
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
<div class="seccion3">
    <h3>Lo m&aacute;s destacado</h3>
    <div class="productos">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <a href="/php/producto.php?idProducto=<?= $productos[$i]["ID"] ?>">
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
<div class="mapa">
    <h2>Localicazi&oacute;n del local</h2>
    <div id="map">
        <p id="latitud" hidden>
            <?= $latitude ?>
        </p>
        <p id="longi" hidden>
            <?= $longitude ?>
        </p>
    </div>
</div>
<script src="/js/scriptMapa.js"></script>
<?php require("../php/views/partials/footer.php") ?>
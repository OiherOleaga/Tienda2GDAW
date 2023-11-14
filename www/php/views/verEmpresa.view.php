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
        <p>Nombre:
            <?= $empresa["Nombre_empresa"] ?>
        </p>
        <p>Correo:
            <?= $empresa["Correo"] ?>
        </p>
        <p>Telefono:
            <?= $empresa["Telefono"] ?>
        </p>
        <p>Direccion:
            <?= $empresa["Direccion"] ?>
        </p>
    </div>
</div>
<div class="seccion2">
    <h3>Todos los productos</h3>
    <button class="btnIzquierda" data-container="gridProductos">Desplazar Izquierda</button>
    <button class="btnDerecha" data-container="gridProductos">Desplazar Derecha</button>
    <div class="productos" id="gridProductos">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <a href="php/producto.php?idProducto=<?= $productos[$i]["ID"] ?>">
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
    <h3>A mucha gente le gustan</h3>
    <button class="btnIzquierda" data-container="gridProductos2">Desplazar Izquierda</button>
    <button class="btnDerecha" data-container="gridProductos2">Desplazar Derecha</button>
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
    </div>
    <script src="/js/desplazamineto.js"></script>
</div>
<div class="mapa">
    <h2>Localicazi&oacute;n del local</h2>
    <div id="map">
        <p id="latitud">
            <?= $latitude ?>
        </p>
        <p id="longi">
            <?= $longitude ?>
        </p>
    </div>
</div>
<script src="/js/scriptMapa.js"></script>
<?php require("../php/views/partials/footer.php") ?>
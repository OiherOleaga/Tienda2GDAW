<?php
require("./mapa.php");
?>
<style>
    <?php include('../css/confEmpresa.css') ?>
</style>

<div class="contenedor">
    <div class="datosEmpresa">
        <form action="/php/confEmpresa.php" method="get">
            <div class="imagenes">
                <div class="logoEmp">
                    <label for="avatar"><img src=<?= $empresa["Avatar"] ?>></label>
                    <input type="file" name="avatar" id="avatar">
                </div>

                <div class="mapa">
                    <div id="map">
                        <p id="latitud"> <?= $latitude ?> </p>
                        <p id="longi"> <?= $longitude ?> </p>
                    </div>
                </div>
            </div>

            <div class="datos">
                <input type="text" id="nombre" name="nombre" value=<?= $empresa["Nombre_empresa"] ?>>
                <input type="text" id="correo" name="correo" value=<?= $empresa["Correo"] ?>>
                <input type="text" id="tel" name="tel" value=<?= $empresa["Telefono"] ?>>
                <input type="text" id="dir" name="dir" value=<?= $empresa["Direccion"] ?>>
                <input type="submit" value="Guardar Cambios">
            </div>





    </div>

    </form>






</div>
</div>
<script src="/js/scriptMapa.js"></script>
<?php require("../php/views/partials/footer.php") ?>
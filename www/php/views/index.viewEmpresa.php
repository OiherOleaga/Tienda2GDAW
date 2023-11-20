<?php require("php/mapa.php") ?>
<?php
$producto = '
<tr>
    <td class="imagen";>
     <img src="https://pbs.twimg.com/profile_images/1564806912855740418/qk9kmlRp_400x400.jpg" alt="messi chiquito">
    </td>
    <td class="titulo";>
     Messi enano
    </td>
    <td class="precio";>
     99999€
    </td>
    <td class="editar";>
        <button>Editar</button>
    </td>
    <td class="Borrar";>
        <button>Borrar</button>
    </td>
</tr>
';

?>
<style>
    <?php include('css/indexempresa.css') ?>
</style>

<div class="pagina">
    <div class="datosEmpresa">
        <form>
            <div class="imgMapa">
                <div id="divFotoPerfil" class="inputbox">
                    <canvas id="canvasFotoPerfil"></canvas>
                    <input type="hidden" name="avatar" id="outputFoto">
                    <input type="file" id="inputFoto" accept="image/*" class="inputbox">
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
            </div>
            <div class="datos">
                <div class="inputbox" id="inputBoxNombre">
                    <input type="text" name="nombre" required>
                    <label>Nombre empresa</label>
                </div>
                <div class="inputbox" id="inputBoxCorreo">
                    <input type="text" name="nombre" required>
                    <label>Correo electronico</label>
                </div>
                <div class="inputbox" id="inputBoxTel">
                    <input type="text" name="nombre" required>
                    <label>Telefono</label>
                </div>
                <div class="inputbox" id="inputBoxDir">
                    <input type="text" name="nombre" required>
                    <label>Direccion</label>
                </div>
                <button type="submit">Guardar cambios</button>
            </div>

        </form>
    </div>
    <div class="tabla">
        <table class="tablaProduct">
            <tr>
                <th>
                    Imagen
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Precio
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Borrar
                </th>
            </tr>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>
            <?= $producto ?>

        </table>
    </div>



</div>
<script src="/js/scriptMapa.js"></script>
<script src="/js/datosEmpresa.js"></script>
<?php require("partials/footer.php") ?>
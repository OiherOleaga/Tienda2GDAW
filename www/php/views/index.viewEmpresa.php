<?php require("./php/mapa.php") ?>

<style>
    <?php require('./css/indexEmpresa.css') ?>
</style>

<div class="pagina">
    <div class="datosEmpresa">
        <form method = "post">
            <div class="imgMapa">
                <div id="divFotoPerfil" class="inputbox">
                    <canvas id="canvasFotoPerfil" src=<?= $cliente['Avatar'] ?>></canvas>
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
                    <input type="text" name="nombre" value=<?= $cliente['Nombre_empresa'] ?> required>
                    <label>Nombre empresa</label>
                </div>
                <div class="inputbox" id="inputBoxCorreo">
                    <input type="text" name="correo" value=<?= $cliente['Correo'] ?> required>
                    <label>Correo electronico</label>
                </div>
                <div class="inputbox" id="inputBoxTel">
                    <input type="text" name="telefono" value=<?= $cliente['Telefono'] ?> required>
                    <label>Telefono</label>
                </div>
                <div class="inputbox" id="inputBoxDir">
                    <input type="text" name="direccion" value="<?= $cliente['Direccion'] ?>" required>
                    <label>Direccion</label>
                </div>
                <button type="submit">Guardar cambios</button>
            </div>

        </form>
    </div>
    <div class="tabla">
        <?php if (isset($productos[0])) { ?>
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
                <?php for ($i = 0; $i < count($productos); $i++) { ?>
                    <tr>
                        <td class="imagen">
                        <img src=<?= $productos[$i]['Foto'] ?> alt=<?= $productos[$i]['Titulo'] ?>>
                        </td>
                        <td class="titulo">
                            <?= $productos[$i]['Titulo'] ?> 
                        </td>
                        <td class="precio">
                            <?= $productos[$i]['Precio'] ?> 
                        </td>
                        <td class="editar">
                            <button>Editar</button>
                        </td>
                        <td class="Borrar">
                            <button>Borrar</button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h2>No hay productos</h2>
        <?php } ?>
    </div>
</div>
<script src="/js/scriptMapa.js"></script>
<script src="/js/datosEmpresa.js"></script>
<?php require("partials/footer.php") ?>
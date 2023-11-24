<?php require("./php/mapa.php") ?>

<style>
    <?php require('./css/indexEmpresa.css') ?>
</style>

<div class="pagina">
    <div class="datosEmpresa">
        <form method="post">
            <div class="imgMapa">
                <div id="divFotoPerfil" class="inputbox">
                    <canvas id="canvasFotoPerfil" src=<?= $empresa['Avatar'] ?>></canvas>
                    <input type="hidden" id="outputFoto">
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
                    <input type="text" id="username" class="datos" value=<?= $empresa['Nombre_empresa'] ?>
                        value1=<?= $empresa['Nombre_empresa'] ?> required>
                    <label>Nombre empresa</label>
                </div>
                <div class="inputbox" id="inputBoxCorreo">
                    <input type="text" id="correo" class="datos" value=<?= $empresa['Correo'] ?>
                        value1=<?= $empresa['Correo'] ?> required>
                    <label>Correo electronico</label>
                </div>
                <div class="inputbox" id="inputBoxTel">
                    <input type="text" id="telefono" class="datos" value=<?= $empresa['Telefono'] ?>
                        value1=<?= $empresa['Telefono'] ?> required>
                    <label>Telefono</label>
                </div>
                <div class="inputbox" id="inputBoxDir">
                    <input type="text" id="direccion" class="datos" value="<?= $empresa['Direccion'] ?>"
                        value1="<?= $empresa['Direccion'] ?>" required>
                    <label>Direccion</label>
                </div>
                <p>
                    <?= $mensajeUsuario ?>
                </p>
                <button type="submit">Guardar cambios</button>
            </div>

        </form>
    </div>
    <h2>Productos</h2>
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
                            <?= $productos[$i]['Precio'] . "€" ?>
                        </td>
                        <td class="editar">
                            <a href="/editarProducto?p=<?= $productos[$i]["ID"] ?>"><button>Editar</button></a>
                        </td>
                        <td class="Borrar">
                            <button class="btBorrar" id="<?= $productos[$i]['ID'] ?>" >Borrar</button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <div id="nada"><img src="https://es.wallapop.com/assets/images/commons/pop-no-results.svg" alt="orewingoer"><br>
                <p>Nada por aqui...</p>
            </div>
        <?php } ?>
    </div>
</div>
<script src="/js/scriptMapa.js"></script>
<script src="/js/datosEmpresa.js"></script>

<?php require "php/views/partials/scriptError.php" ?>

<?php require("partials/footer.php") ?>
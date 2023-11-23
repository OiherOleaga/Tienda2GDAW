<?php require("partials/headAdmin.php") ?>
<style>
    <?php include('../css/verAdmin.css') ?>
</style>
<div class="tabla">
    <h2>Productos</h2>
    <?php if (isset($productos[0])) { ?>
        <table class="tablaProducto">
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
                    <td class="Borrar">
                        <a href="/php/indexAdmin.php?accion=borrarProducto&id=<?= $productos[$i]["ID"] ?>"><button
                                class="borrar">Borrar</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <h2 style="color:red;">No hay Productos</h2>
    <?php } ?>
</div>
<div class="tabla">
    <h2>Clientes</h2>
    <?php if (isset($clientes[0])) { ?>
        <table class="tablaProducto">
            <tr>
                <th>
                    Avatar
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Usuario
                </th>
                <th>
                    Apellidos
                </th>
                <th>
                    Correo
                </th>
                <th>
                    Telefono
                </th>
                <th>
                    Direccion
                </th>
                <th>
                    Borrar
                </th>
            </tr>
            <?php for ($i = 0; $i < count($clientes); $i++) { ?>
                <tr>
                    <td class="avatar">
                        <img src=<?= $clientes[$i]['Avatar'] ?> alt="avatar" ?>
                    </td>
                    <td class="nombre">
                        <?= $clientes[$i]['Nombre'] ?>
                    </td>
                    <td class="usuario">
                        <?= $clientes[$i]['username'] ?>
                    </td>
                    <td class="apellidos">
                        <?= $clientes[$i]['Apellidos'] ?>
                    </td>
                    <td class="correo">
                        <?= $clientes[$i]['Correo'] ?>
                    </td>
                    <td class="telefono">
                        <?= $clientes[$i]['Telefono'] ?>
                    </td>
                    <td class="direccion">
                        <?= $clientes[$i]['Direccion'] ?>
                    </td>
                    <td class="Borrar">
                        <a href="/php/indexAdmin.php?accion=borrarCliente&id=<?= $clientes[$i]["ID"] ?>"><button
                                class="borrar">Borrar</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <h2 style="color:red;">No hay Clientes</h2>
    <?php } ?>
</div>
<div class="tabla">
    <h2>Comerciantes</h2>
    <?php if (isset($comerciantes[0])) { ?>
        <table class="tablaProducto">
            <tr>
                <th>
                    Avatar
                </th>
                <th>
                    Empresa
                </th>
                <th>
                    Correo
                </th>
                <th>
                    Telefono
                </th>
                <th>
                    Direccion
                </th>
                <th>
                    Borrar
                </th>
            </tr>
            <?php for ($i = 0; $i < count($comerciantes); $i++) { ?>
                <tr>
                    <td class="avatar">
                        <img src=<?= $comerciantes[$i]['Avatar'] ?> alt="avatar" ?>
                    </td>
                    <td class="empresa">
                        <?= $comerciantes[$i]['Nombre_empresa'] ?>
                    </td>
                    <td class="correo">
                        <?= $comerciantes[$i]['Correo'] ?>
                    </td>
                    <td class="telefono">
                        <?= $comerciantes[$i]['Telefono'] ?>
                    </td>
                    <td class="direccion">
                        <?= $comerciantes[$i]['Direccion'] ?>
                    </td>
                    <td class="Borrar">
                        <a href="/php/indexAdmin.php?accion=borrarComerciante&id=<?= $comerciantes[$i]["ID"] ?>"><button
                                class="borrar">Borrar</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <h2 style="color:red;">No hay Comerciantes</h2>
    <?php } ?>
</div>
<div class="tabla">
    <h2>Categorias</h2>
    <?php if (isset($categorias[0])) { ?>
        <table class="tablaProducto">
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Borrar
                </th>
            </tr>
            <?php for ($i = 0; $i < count($categorias); $i++) { ?>
                <tr>
                    <td class="nombre">
                        <?= $categorias[$i]['Nombre'] ?>
                    </td>
                    <td class="Borrar">
                        <a href="/php/indexAdmin.php?accion=borrarCategoria&id=<?= $categorias[$i]["ID"] ?>"><button
                                class="borrar">Borrar</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div id="divInsercionCategoria" style="display: none;">
            <form action="/php/indexAdmin.php" method="post">
                <label for="nombreCategoria">Nombre de la categoría:</label>
                <input type="text" id="nombreCategoria" name="nombreCategoria" placeholder="Nombre de la categoria">
                <input type="hidden" name="accion" value="insertar">
                <button id="btnInsertarCategoriaForm">Insertar</button>
            </form>
        </div>
        <div class="insertar"> <button id="btnInsertarCategoria">Insertar Categoría</button>
        </div>
    <?php } else { ?>
        <h2 style="color:red;">No hay categorias</h2>
    <?php } ?>
</div>
<script src="/js/admin.js"></script>
<?php require("partials/footer.php") ?>
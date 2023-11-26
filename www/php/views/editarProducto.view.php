<style>
    <?php include('css/subirProduct.css') ?>
</style>

<div class="contenedor">
    <div class="datos">
        <form method="post">
            <div class="inputbox" id="inputBoxTitulo">
                <input type="text" id="titulo" class="inputs" value="<?= $producto["Titulo"] ?>" value1="<?= $producto["Titulo"] ?>" required>
                <label>Titulo Producto</label>
            </div>
            <div class="inputbox" id="inputBoxPrecio">
                <input type="text" id="precio" class="inputs" value="<?= $producto["Precio"] ?>" value1="<?= $producto["Precio"] ?>" required>
                <label>Precio</label>
            </div>

            <div class="cat">
                <h4>Categoria del producto</h4>

                <?php foreach ($categorias as $categoria) { ?>
                    <div>
                        <input  type="checkbox" class="categorias" n="categorias[]" 
                                id=<?= $categoria["ID"] ?> 
                                value=<?= $categoria["ID"] ?>
                                <?= $categoria["checked"] !== NULL? "checked": "" ?>
                        >
                        <input type="hidden" name="categoriasTodas[]" class="categoriaHidden">
                        <label for=<?= $categoria["ID"] ?>><?= $categoria["Nombre"] ?></label>
                    </div>
                <?php } ?>
            </div>

            <label>Descripcion</label>
            <textarea id="descripcion" id="descripcion" class="inputs" value1="<?= $producto["Descripcion"] ?>" required><?= $producto["Descripcion"] ?></textarea>

            <div class="fotos">
                <?php foreach ($fotos as $foto) { ?>
                    <div class="inputbox">
                        <canvas class="canvasFotoPerfil" src="<?= $foto["url"] ?>" ></canvas>
                        <input type="hidden" id="foto0" class="outputFoto">
                        <input type="file" class="inputFoto" accept="image/*">
                    </div>
                <?php } ?>
            </div>

            <button id="subirFoto" type="button" onclick="agregarInputBox()"><i class="fa fa-plus" aria-hidden="true"></i>
            </button>
            <p><?= $mensajeUsuario ?></p>
            <button type="submit">Subir Producto</button>
        </form>
    </div>
</div>

<script src="/js/insertarVariasFotos.js"></script>
<script src="/js/updateProducto.js"></script>
<?php require("php/views/partials/scriptError.php") ?>

<?php require("partials/footer.php"); ?>
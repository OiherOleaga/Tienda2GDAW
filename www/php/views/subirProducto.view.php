<style>
    <?php include('./css/subirProduct.css') ?>
</style>

<div class="contenedor">
    <div class="datos">
        <form method="post">
            <div class="inputbox" id="inputBoxTitulo">
                <input type="text" name="titulo" required>
                <label>Titulo Producto</label>
            </div>
            <div class="inputbox" id="inputBoxPrecio">
                <input type="text" name="precio" required>
                <label>Precio</label>
            </div>
            <div class="cat">
                <h4>Categoria del producto</h4>

                <?php foreach ($categorias as $categoria) { ?>
                    <div>
                        <input type="checkbox" class="categoria" id=<?= $categoria["ID"] ?>>
                        <label for=<?= $categoria["ID"] ?>><?= $categoria["Nombre"] ?></label>
                    </div>
                <?php } ?>
            </div>

            <label>Descripcion</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <div class="fotos">
                <div class="inputbox">
                    <canvas class="canvasFotoPerfil"></canvas>
                    <input type="hidden" id="foto0" class="outputFoto">
                    <input type="file" class="inputFoto" accept="image/*">
                </div>
            </div>

            <button id="subirFoto" type="button" onclick="agregarInputBox()"><i class="fa fa-plus" aria-hidden="true"></i>
            </button>

            <button type="submit">Subir Producto</button>
        </form>
    </div>
</div>

<script src="/js/insertarVariasFotos.js"></script>
<?php require("php/views/partials/scriptError.php") ?>

<?php require("partials/footer.php"); ?>
<style>
    <?php include('css/subirProduct.css') ?>
</style>

<div class="contenedor">
    <div class="datos">
        <form action="#" method="post">
            <div class="inputbox" id="inputBoxTitulo">
                <input type="text" name="Titulo" required>
                <label>Titulo Producto</label>
            </div>
            <div class="inputbox" id="inputBoxPrecio">
                <input type="text" name="Precio" required>
                <label>Precio</label>
            </div>



            <label>Descripcion</label>
            <textarea id="descripcion" name="mensaje" required></textarea>

            <div class="fotos">
                <div class="inputbox">
                    <canvas class="canvasFotoPerfil"></canvas>
                    <input type="hidden" name="avatar" class="outputFoto">
                    <input type="file" class="inputFoto" accept="image/*">
                </div>

                <div class="inputbox">
                    <canvas class="canvasFotoPerfil"></canvas>
                    <input type="hidden" name="avatar" class="outputFoto">
                    <input type="file" class="inputFoto" accept="image/*">
                </div>

                <div class="inputbox">
                    <canvas class="canvasFotoPerfil"></canvas>
                    <input type="hidden" name="avatar" class="outputFoto">
                    <input type="file" class="inputFoto" accept="image/*">
                </div>

                <div class="inputbox">
                    <canvas class="canvasFotoPerfil"></canvas>
                    <input type="hidden" name="avatar" class="outputFoto">
                    <input type="file" class="inputFoto" accept="image/*">
                </div>

                <div class="inputbox">
                    <canvas class="canvasFotoPerfil"></canvas>
                    <input type="hidden" name="avatar" class="outputFoto">
                    <input type="file" class="inputFoto" accept="image/*">
                </div>
            </div>



            <button type="submit">Subir Producto</button>
        </form>
    </div>
</div>

<script src="/js/insertarVariasFotos.js"></script>

<?php require("partials/footer.php"); ?>
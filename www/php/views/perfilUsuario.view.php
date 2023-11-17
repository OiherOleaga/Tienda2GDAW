<style>
    <?php include('./css/perfilUsuario.css') ?>
</style>
<div class="pagina">
    <div class="elementos">
        <div class="bloque">
            <aside>
                <form>
                    <div class="filtro">
                        <a href="#">
                            <div class="nombre">
                                <div class="cliente"><img src="<?= $cliente["Avatar"] ?>"><strong>
                                        <?= $cliente["username"] ?>
                                    </strong></div>
                            </div>
                        </a>
                    </div>
                    <div class="filtro">
                        <div class="likes">
                            <div>
                            <img src="/assets/amor.png"><p>Favoritos</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtro">
                        
                    </div>
                    <div class="filtro">
                        <div class="ordenar">
                            <h4>Filtar</h4>
                            <select>
                                <option selected>Precio: De Bajo a Alto</option>
                                <option>Precio: De Alto a Bajo</option>
                                <option>Titulo: A-Z</option>
                                <option>Titulo: Z-A</option>
                            </select>
                        </div>
                    </div>
                </form>
        </div>
        </aside>
        <div class="contenido">

        </div>
    </div>
</div>

<?php require("partials/footer.php") ?>
<style>
    <?php include('./css/productos.css') ?>
</style>
<div class="pagina">
    <div class="elementos">
    <div class="botonesFiltro"><input id="btnFiltro" type="button" value="Filtros" class="button"></div> 
        <div class="bloque" id="bloque">
            <aside>
                <form>
                    <div class="filtro">
                        <div class="nombre">
                            <h4>Buscador</h4>
                            <div class="buscar"><input class="search" id="search" type="search" placeholder="" name="search" value="<?= $search ?>"></div>
                        </div>
                    </div>
                    <div class="filtro">
                        <h4>Categoria</h4>
                        <div class="categorias">
                            <?php foreach ($categorias as $categoria) { ?>
                                <div>
                                    <input type="checkbox" class="categoria" id=<?= $categoria["ID"] ?>>
                                    <label for=<?= $categoria["ID"] ?>><?= $categoria["Nombre"] ?></label>
                                    <p class="numeroElementos">(<?= $categoria["numeroProdcutos"] ?>)</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="filtro">
                        <h4>Precio</h4>
                        <div class="precio">
                            <input type="text" inputmode="decimal" id="precioMin" placeholder="Min"><strong>-</strong><input type="text" id="precioMax" placeholder="Max" inputmode="decimal">
                        </div>
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
        
        <div class="productos" id="productos">

        </div>
    </div>
</div>
<script src="/js/filtroProductos.js"></script>
<script src="/js/productos.js"></script>

<?php require("partials/footer.php") ?>
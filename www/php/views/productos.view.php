<style>
    <?php include('../css/productos.css') ?>
</style>
<div class="pagina">
    <div class="elementos">
        <div class="bloque">
            <aside>
                <form>
                    <div class="filtro">
                        <div class="nombre">
                            <h4>Buscador</h4>
                            <div class="buscar"><input class="search" type="search" placeholder="" name="search"></div>
                        </div>
                    </div>
                    <div class="filtro">
                        <h4>Categoria</h4>
                        <div class="categorias">
                            <div>
                                <input type="checkbox" name="categoria" id="tecnologia" value="tecnologia"> <label
                                    for="tecnologia">Tecnologia</label>
                                <p class="numeroElementos">(1)</p>
                            </div>
                            <div><input type="checkbox" name="categoria" id="inmobiliaria" value="inmobiliaria"> <label
                                    for="inmobiliaria">Inmobiliaria</label>
                                <p class="numeroElementos">(12)</p>
                            </div>
                            <div><input type="checkbox" name="categoria" id="electrdomesticos" value="electrdomesticos">
                                <label for="electrdomesticos">Electrodomesticos</label>
                                <p class="numeroElementos">(5)</p>
                            </div>
                            <div><input type="checkbox" name="categoria" id="deporteocio" value="deporteocio"> <label
                                    for="deporteocio">Deporte y ocio</label>
                                <p class="numeroElementos">(10)</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtro">
                        <h4>Precio</h4>
                        <div class="precio">
                            <input type="text" inputmode="decimal" name="rangeFrom" placeholder="Min"><strong>-</strong><input type="text" name="rangeTo" placeholder="Max" inputmode="decimal">
                        </div>
                    </div>
                    <div class="filtro">
                        <div class="ordenar">
                            <h4>Ordenar</h4>
                        </div>
                    </div>
                </form>
        </div>
        </aside>
        <div class="productos">
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <a href="/php/producto.php?idProducto=<?= $productos[$i]["ID"] ?>">
                    <div class="caja">
                        <div class="img"><img src=<?= $productos[$i]["Foto"] ?>></div>
                        <div class="bottom">
                            <h5>
                                <?= $productos[$i]["Precio"] . "€" ?>
                            </h5>
                        </div>
                        <div class="top">
                            <p>
                                <?= $productos[$i]["Titulo"] ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

<?php require("partials/footer.php") ?>
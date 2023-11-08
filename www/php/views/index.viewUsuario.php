<?php require("php/views/partials/headUsuario.php") ?>
<div class="seccion1">
    <h3>Compra y vende artículos de segunda mano en Wallapop</h3>
    <p>una comunidad que lleva años generando impacto del bueno</p>
    <form>
        <div class="buscar"> <input class="search" type="search" placeholder="" name="categoria">
        </div>
        <input class="button" type="submit" value="Buscar">
    </form>
</div>
<div class="seccion2">
    <h3>Lo mejor, al mejor precio</h3>
    <div class="productos">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <?= $productos[$i] ?>
        <?php } ?>
    </div>
</div>
<div class="seccion3">
    <h3>A mucha gente le gustan</h3>
    <div class="productos">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <?= $productos[$i] ?>
        <?php } ?>
    </div>
</div>
<?php require("php/views/partials/footer.php") ?>
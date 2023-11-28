<div class="cookies" id="cookies">
    <div><img src="/assets/Logo/logo.png" alt="logo"></div>
    <h3>Por una experiencia mas segura que nunca</h3>
    <div>
        <p>
            En InfiniteChoice respetamos tu privacidad.
            Tanto InfiniteChoice como terceros únicamente usamos información no sensible,
            como identificadores de dispositivo o almacenamiento, para determinar el origen de las visitas
            que nuestra aplicación recibe, evaluar las preferencias de nuestros usuarios y el uso que hacen
            de la aplicación, ofrecer contenidos personalizados o categorizar la publicidad que mostramos.
            Si más adelante quieres cambiar tus preferencias, puedes hacerlo en cualquier momento desde nuestra aplicación,
            tal y como se detalla en el apartado sobre protección de datos personales.
            Respetamos tu decisión sobre permitir o denegar ser rastreado/a mediante la App Tracking Transparency o similares.
            Con tu consentimiento, InfiniteChoice y nuestros socios usamos cookies o tecnologías similares para almacenar,
            procesar y acceder a datos personales como tu visita a este sitio web.
        </p>
    </div>
    <div><button class="btn" id="aceptarCookies">Aceptar Cookies</div>
    <script src="/js/aceptarCookies.js"></script>
</div>
<div class="seccion1">
    <h3>Mira artículos a buen precio en <strong style="color:#0A3093;">InfiniteChoice</strong></h3>
    <p>una comunidad vitoriana que lleva años generando impacto del bueno</p>
    <form action="/productos">
        <div class="buscar"> <input class="search" type="search" placeholder="" name="search">
        </div>
        <input class="button" type="submit" value="Buscar">
    </form>
</div>
<div class="seccion2">
    <h3>Lo mejor, al mejor precio</h3>
    <?php if (count($productos) <= 0) { ?>
        <div id="nada"><img src="https://es.wallapop.com/assets/images/commons/pop-no-results.svg" alt="orewingoer"><br>
            <p>Nada por aqui...</p>
        </div>
    <?php } else { ?>
        <div class="productos" id="gridProductos">
            <button class="btnIzquierda" data-container="gridProductos"><i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl"></i></button>
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <a href="/producto?idProducto=<?= $productos[$i]["ID"] ?>">
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
            <button class="btnDerecha" data-container="gridProductos"><i class="fa-solid fa-arrow-right fa-beat-fade fa-2xl"></i></button>
        <?php } ?>
        </div>
</div>
<div class="seccion3">
    <h3>A mucha gente le gustan</h3>
    <?php if (count($productosFav) <= 0) { ?>
        <div id="nada"><img src="https://es.wallapop.com/assets/images/commons/pop-no-results.svg" alt="orewingoer"><br>
            <p>Nada por aqui...</p>
        </div>
    <?php } else { ?>
        <div class="productos" id="gridProductos2">
            <button class="btnIzquierda" data-container="gridProductos2"><i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl"></i></button>
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <a href="/producto?idProducto=<?= $productosFav[$i]["ID"] ?>">
                    <div class="caja">
                        <div class="img"><img src=<?= $productosFav[$i]["Foto"] ?>></div>
                        <div class="bottom">
                            <h5>
                                <?= $productosFav[$i]["Precio"] . "€" ?>
                            </h5>
                        </div>
                        <div class="top">
                            <p>
                                <?= $productosFav[$i]["Titulo"] ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <button class="btnDerecha" data-container="gridProductos2"><i class="fa-solid fa-arrow-right fa-beat-fade fa-2xl"></i></button>
        <?php } ?>
        </div>
</div>
<div class="seccion3">
    <h3>Lo m&aacute;s reciente</h3>
    <?php if (count($productosNuevos) <= 0) { ?>
        <div id="nada"><img src="https://es.wallapop.com/assets/images/commons/pop-no-results.svg" alt="orewingoer"><br>
            <p>Nada por aqui...</p>
        </div>
    <?php } else { ?>
        <div class="productos" id="gridProductos3">
            <button class="btnIzquierda" data-container="gridProductos3"><i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl"></i></button>
            <?php for ($i = 0; $i < 20; $i++) { ?>
                <a href="/producto?idProducto=<?= $productosNuevos[$i]["ID"] ?>">
                    <div class="caja">
                        <div class="img"><img src=<?= $productosNuevos[$i]["Foto"] ?>></div>
                        <div class="bottom">
                            <h5>
                                <?= $productosNuevos[$i]["Precio"] . "€" ?>
                            </h5>
                        </div>
                        <div class="top">
                            <p>
                                <?= $productosNuevos[$i]["Titulo"] ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <button class="btnDerecha" data-container="gridProductos3"><i class="fa-solid fa-arrow-right fa-beat-fade fa-2xl"></i></button>
        <?php } ?>
        </div>
</div>
<script src="/js/desplazamineto.js"></script>
<?php require("php/views/partials/footer.php") ?>
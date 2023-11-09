<?php require("partials/headInicio.php") ?>
<?php
$imagen = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKeSa1C6juporQs3SdNlo94-CQ69fV0tKYdA&usqp=CAU";
$precio = 999.99;
$titulo = "Knekro";
$desc = "oña Uzeada de Ribera Maldonado de Bracamonte y Anaya era baja, rechoncha, abigotada. Ya no existia razon para llamar talle al suyo. Sus colores vivos, sanos, podian mas que el albayalde y el soliman del afeite, con que se blanqueaba por simular melancolias. Gastaba dos parches oscuros, adheridos a las sienes y que fingian medicamentos. Tenia los ojitos ratoniles, maliciosos. Sabia dilatarlos duramente o des";
$ubi = "calle getaria 12, vitoria-gasteiz";
$imgLike = "https://cdn-icons-png.flaticon.com/512/1077/1077035.png";
?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .cont {
        background-color: #000000;
    }

    .pagina {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .productoCaja {
        margin: 3em;
        display: grid;
        align-items: center;
        width: 60%;
        height: 90%;
        border: 1px solid lightgrey;
        box-shadow: 7px 6px 5px lightgrey;
        padding: 10px;
        column-gap: 10px;
        border-radius: 10px;
        text-align: center;
        grid-template:
            "vendedor vendedor" 1fr
            "imagen titulo" 1fr
            "imagen desc" 3fr
            "precio precio" /
            50% 50%;
        border: 1px solid black;
    }

    .titulo {
        grid-area: titulo;
        width: 100%;
        font-size: 3em;
        display: flex;
        text-decoration: underline;
        justify-content: center;

    }

    .foto {
        grid-area: imagen;
        width: 100%;
        height: 100%;
        padding: 1em;
    }

    .foto img {
        width: 90%;
        height: auto;
        border-radius: 10%;
    }

    .precio {
        border-top: 2px solid lightgrey;
        padding: .5em .5em;
        grid-area: precio;
        text-align: center;
        height: 100%;
        width: 100%;
        font-size: 3em;
        text-decoration: underline;
    }

    .desc {
        align-self: center;
        grid-area: desc;
        width: 100%;
        margin: 0 auto;
    }

    .desc p {
        font-size: 1.3em;
        text-align: center;
        padding: 0 3em;
    }

    .likes {
        grid-area: likes;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        border-bottom: 2px solid lightgrey;
        margin-bottom: 5px;
        padding-bottom: 2em;

    }

    .vendedor {
        padding-bottom: 2em;
        grid-area: vendedor;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1.5em;
        margin-bottom: 5px;
        border-bottom: 2px solid lightgrey;
    }

    .vendedor p {
        font-size: 2em;
    }

    .avatar {
        gap: 20px;
    }

    .corazon {
        margin-right: 2em;
        width: 55px;
        height: 55px;
    }

    #map {
        width: 50%;
        height: 500px;
        margin-bottom: 5em;
        border: 1px solid lightgrey;
        box-shadow: 7px 6px 5px lightgrey;
        border-radius: 10px;
    }
</style>
<?php

require "/php/mapa.php";
?>
<div>
    <div class="pagina">
        <div class="productoCaja">
            <div class="vendedor">
                <div class="avatar">
                    <img src=<?= $imagen ?> class="avatarEmpresa">
                    <p>Juan</p>
                </div>
                <img src=<?= $imgLike ?> class="corazon">
            </div>
            <div class="titulo">
                <p><?= $titulo ?></p>
            </div>
            <div class="foto"><img src=<?= $imagen ?>></div>
            <div class="precio">
                <h5><?= $precio . "€" ?></h5>
            </div>

            <div class="desc">
                <p><?= $desc ?></p>
            </div>

        </div>
        <div id="map">
            <p id="latitud"> <?= $latitude ?> </p>
            <p id="longi"> <?= $longitude ?> </p>
        </div>
    </div>

    <script src="/js/scriptMapa.js">

    </script>
    <?php require("../php/views/partials/footer.php") ?>
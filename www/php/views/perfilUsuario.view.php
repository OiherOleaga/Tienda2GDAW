<style>
    <?php include('./css/perfilUsuario.css') ?>
</style>
<div class="pagina">
    <div class="elementos">
        <div class="bloque">
            <aside>
                <a href="info" class="link">
                    <div class=" enlaces">
                        <div class="cliente">
                            <img src="<?= $cliente["Avatar"] ?>">
                            <p>
                                <?= $cliente["username"] ?>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="favorites" class="link">
                    <div class="enlaces">
                        <div class="likes">
                            <svg width="32px" height="32px" viewBox="3 5 40 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg" display="flex">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.417 11a8.689 8.689 0 0 1 5.16 1.715l.007.005a.692.692 0 0 0 .416.145.757.757 0 0 0 .438-.145l.007-.005A8.69 8.69 0 0 1 29.631 11h.016a9.623 9.623 0 0 1 6.591 2.735A9.155 9.155 0 0 1 39 20.208v.006c0 4.993-2.973 8.893-6.112 11.618-3.15 2.735-6.618 4.42-7.959 4.99l-.016.006c-.292.118-.612.17-.897.171a2.254 2.254 0 0 1-.964-.186c-1.298-.583-4.765-2.261-7.921-4.988C11.987 29.11 9 25.22 9 20.215v-.007a9.156 9.156 0 0 1 2.78-6.49A9.625 9.625 0 0 1 18.403 11h.014Zm7.227 3.316a2.758 2.758 0 0 1-1.638.55h-.012a2.692 2.692 0 0 1-1.616-.55A6.689 6.689 0 0 0 18.417 13a7.624 7.624 0 0 0-5.24 2.149A7.156 7.156 0 0 0 11 20.218c.001 4.156 2.483 7.541 5.438 10.094 2.927 2.528 6.171 4.108 7.413 4.668.05.019.077.021.111.02h.044a.5.5 0 0 0 .154-.025c1.238-.527 4.489-2.112 7.417-4.654 2.95-2.56 5.422-5.956 5.423-10.103a7.156 7.156 0 0 0-2.163-5.056A7.622 7.622 0 0 0 29.624 13a6.69 6.69 0 0 0-3.98 1.316Z"
                                    fill="#253238"></path>
                            </svg>
                            <p>Favoritos</p>
                        </div>

                    </div>
                </a>
                <a href="ayuda" class="link">
                    <div class="enlaces">
                        <div class="configuracion">
                            <svg width="32px" height="32px" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg" display="flex">
                                <path
                                    d="M20 25a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm2.803-12.064c-.767-.71-1.753-.983-2.834-.93a4 4 0 00-2.715 1.146l-.01.01-.01.01a4.587 4.587 0 00-1.225 2.559 1 1 0 001.983.26 2.582 2.582 0 01.684-1.432c.17-.167.374-.303.603-.398a2.02 2.02 0 01.743-.155h.018l.018-.001c.674-.036 1.092.13 1.378.392.355.346.548.801.554 1.268v.036l.003.036c.025.293-.018.59-.126.867a3.78 3.78 0 01-.5.828l-.001.002a8.536 8.536 0 01-.763.842l-.007.008c-.324.32-.628.658-.912 1.012a2.433 2.433 0 00-.341.572c-.283.656-.339 1.342-.34 1.91L19 22.997a1 1 0 002 .004l.003-1.22c.001-.462.051-.832.176-1.122a.438.438 0 01.062-.109l.004-.005c.234-.292.485-.571.753-.836.335-.325.648-.67.936-1.035.314-.395.574-.828.774-1.289l.007-.014.005-.015a3.945 3.945 0 00.27-1.751 3.805 3.805 0 00-1.172-2.656l-.008-.007-.007-.007z"
                                    fill="#253238"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 20c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16S4 28.837 4 20zM20 6C12.268 6 6 12.268 6 20s6.268 14 14 14 14-6.268 14-14S27.732 6 20 6z"
                                    fill="#253238"></path>
                            </svg>
                            <p>Ayuda</p>
                        </div>
                    </div>
                </a>
            </aside>
        </div>
        <div class="contenido">
            <?php
            switch ($uri[2]) {
                case 'info':
                    require "./php/views/info.view.php";
                    break;
                case 'favorites':
                    require "./php/views/favorites.view.php";
                    break;
                case 'ayuda':
                    require "./php/views/ayuda.view.php";
                    break;
                default:
                    require "./php/views/info.view.php";
                    break;
            }
            ?>
        </div>
    </div>
</div>
<script type="module" src="/js/verPerfil.js"></script>
<?php require("partials/footer.php") ?>
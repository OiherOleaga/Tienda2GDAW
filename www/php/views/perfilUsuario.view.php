<style>
    <?php include('./css/perfilUsuario.css') ?>
</style>
<div class="pagina">
    <div class="elementos">
        <div class="bloque">
            <aside>
                <a href="/verPerfil/info" class="link"">
                    <div class="enlaces">
                        <div class="cliente">
                            <img src="<?= $cliente["Avatar"] ?>">
                            <p>
                                <?= $cliente["username"] ?>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/verPerfil/favorites" class="link">
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
                <a href="#" class="link">
                    <div class="enlaces">
                        <div class="buzon">
                            <svg width="32px" height="32px" viewBox="3 5 40 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg" display="flex">
                                <path d="M35 18s-8.63 8-11 8c-2.37 0-11-8-11-8M34.04 31l-6.5-6.5M20.54 24.5l-6.5 6.5"
                                    stroke="#253238" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M9.04 23.5c0-.748-.011-1.45-.022-2.112-.021-1.325-.04-2.495.039-3.578.116-1.59.436-2.774 1.153-3.692.712-.911 1.925-1.7 4.12-2.257C16.531 11.3 19.632 11 24 11s7.468.302 9.67.86c2.195.558 3.408 1.347 4.12 2.258.717.918 1.038 2.102 1.153 3.692.079 1.083.06 2.253.039 3.578-.01.662-.022 1.364-.022 2.112 0 .412.002.814.003 1.206.008 1.708.014 3.229-.13 4.61-.174 1.678-.563 3.017-1.356 4.085C35.903 35.517 32.388 37 24 37s-11.903-1.483-13.476-3.6c-.794-1.067-1.183-2.406-1.358-4.085-.143-1.38-.137-2.9-.13-4.609.002-.392.004-.794.004-1.206Z"
                                    stroke="#253238" stroke-width="2"></path>
                            </svg>
                            <p>Buz&oacute;n</p>
                        </div>

                    </div>
                </a>
                <a href="#" class="link">
                    <div class="enlaces">
                        <div class="configuracion">
                            <svg width="32px" height="32px" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg" display="flex">
                                <path
                                    d="M33.887 17.86c-.302-.1-.503-.404-.604-.708-.302-.912-.604-1.823-1.107-2.633-.201-.304-.201-.608-.1-.911.503-1.317.1-2.836-.806-3.747-.704-.71-1.61-1.013-2.515-1.013-.403 0-.805.101-1.208.203-.1 0-.302.1-.402.1-.202 0-.403 0-.604-.1-.805-.405-1.71-.81-2.617-1.114-.301-.102-.603-.304-.704-.608C22.717 5.81 21.41 5 20 5c-1.409 0-2.717.81-3.22 2.127-.1.303-.403.506-.704.607-1.007.203-1.812.608-2.718 1.114-.1 0-.301.101-.503.101-.1 0-.302 0-.402-.1-.403-.102-.805-.203-1.208-.203-.905 0-1.912.405-2.515 1.012-1.007 1.013-1.309 2.43-.805 3.747.1.304.1.709-.101.912-.403.81-.805 1.721-1.107 2.632-.1.304-.302.608-.604.71C4.805 18.366 4 19.682 4 21.1c0 1.418.805 2.734 2.113 3.24.302.102.503.406.604.71.302.911.604 1.822 1.107 2.633.201.303.201.607.1.91-.503 1.317-.1 2.836.806 3.748.704.709 1.61 1.012 2.515 1.012.403 0 .805-.1 1.208-.202.1 0 .302-.101.402-.101.202 0 .403 0 .604.1.805.406 1.71.811 2.617 1.115.301.101.603.304.704.607C17.384 36.19 18.692 37 20 37c1.409 0 2.717-.81 3.22-2.127.1-.303.403-.506.704-.607.906-.304 1.812-.608 2.617-1.114.201-.101.402-.101.604-.101.1 0 .302 0 .402.1.403.102.805.203 1.208.203.905 0 1.912-.405 2.515-1.012 1.007-1.013 1.309-2.43.805-3.747-.1-.304-.1-.709.101-.912a20.62 20.62 0 0 0 1.107-2.632c.1-.304.302-.608.604-.71 1.308-.607 2.113-1.923 2.113-3.24 0-1.316-.805-2.734-2.113-3.24Zm-.805 4.659c-.805.405-1.409 1.114-1.71 2.025a8.63 8.63 0 0 1-.907 2.228c-.402.81-.503 1.722-.2 2.633.2.608.1 1.215-.403 1.722-.302.303-.705.506-1.107.506-.201 0-.403 0-.503-.101a3.6 3.6 0 0 0-1.107-.203c-.503 0-1.007.101-1.51.405-.704.405-1.51.709-2.214.912-.905.303-1.61.911-2.012 1.721-.302.608-.805.912-1.409.912s-1.207-.406-1.409-.912c-.402-.81-1.107-1.418-2.012-1.721a8.516 8.516 0 0 1-2.214-.912 2.826 2.826 0 0 0-1.51-.405c-.402 0-.704.101-1.107.203-.2.1-.402.1-.503.1-.402 0-.805-.202-1.107-.505-.402-.405-.603-1.114-.402-1.722.302-.81.201-1.823-.201-2.633-.403-.709-.705-1.519-.906-2.228-.302-.911-.906-1.62-1.71-2.025-.504-.202-.906-.81-.906-1.418 0-.607.402-1.215.905-1.418.805-.404 1.409-1.113 1.71-2.025.202-.81.504-1.519.907-2.228.402-.81.503-1.721.2-2.633-.2-.506-.1-1.215.403-1.62.302-.304.705-.506 1.107-.506.202 0 .403 0 .503.101a3.6 3.6 0 0 0 1.107.203c.503 0 1.007-.102 1.51-.405.704-.405 1.51-.71 2.214-.912.905-.304 1.61-.911 2.012-1.721.201-.507.805-.912 1.409-.912s1.207.405 1.409.912c.402.81 1.107 1.417 2.012 1.721.805.203 1.51.507 2.214.912a2.826 2.826 0 0 0 1.51.405c.402 0 .704-.102 1.107-.203.2-.101.402-.101.503-.101.402 0 .805.202 1.107.506.402.405.603 1.114.402 1.722-.302.81-.201 1.823.201 2.633.403.709.705 1.519.906 2.227.302.912.906 1.62 1.71 2.026.604.304.906.81.906 1.418 0 .607-.402 1.114-.905 1.316Z"
                                    fill="#253238"></path>
                                <path
                                    d="M20.7 20.304c-.3-.3-.7-.4-1.1-.2-.1 0-.2.1-.3.2-.1.1-.2.2-.2.3-.1.1-.1.2-.1.4 0 .3.1.5.3.7.2.2.4.3.7.3.3 0 .5-.1.7-.3.2-.2.3-.4.3-.7 0-.1 0-.3-.1-.4 0-.1-.1-.2-.2-.3Z"
                                    fill="#253238"></path>
                                <path
                                    d="M20 14c-1.9 0-3.6.7-4.9 2.1-1.3 1.4-2.1 3-2.1 4.9 0 1.9.7 3.6 2.1 4.9.2.2.5.3.7.3.2 0 .5-.1.7-.3.4-.4.4-1 0-1.4-.9-.9-1.5-2.2-1.5-3.5 0-1.3.5-2.6 1.5-3.5 1-.9 2.2-1.5 3.5-1.5 1.3 0 2.6.5 3.5 1.5.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4-1.2-1.4-3-2.1-4.9-2.1Z"
                                    fill="#253238"></path>
                            </svg>
                            <p>Configuraci&oacute;n</p>
                        </div>
                    </div>
                </a>
            </aside>
        </div>
        <div class="contenido">
            <form>
                <div class="contenedor">
                    <div class="caja">
                        <div class="cajaUsuario">
                            <div class="fila">
                                <h3>Tu Perfil</h3>
                                <div class="datos"><label>Foto de perfil</label>
                                    <div class="input"><img src="<?= $cliente["Avatar"] ?>"><br><button class="cambiarFoto">Cambiar Foto</button></div>
                                </div>
                                <div class="datos"><label>Usuario</label>
                                    <div class="input"><input type="text" value="<?= $cliente["username"] ?>"></div>
                                </div>
                                <div class="datos"><label>Nombre</label>
                                    <div class="input"><input type="text" value="<?= $cliente["Nombre"] ?>"></div>
                                </div>
                                <div class="datos"><label>Apellidos</label>
                                    <div class="input"><input type="text" value="<?= $cliente["Apellidos"] ?>"></div>
                                </div>
                                <div class="datos"><label>Correo</label>
                                    <div class="input"><input type="email" value="<?= $cliente["Correo"] ?>"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
<script src="/js/verPerfil.js"></script>
<?php require("partials/footer.php") ?>
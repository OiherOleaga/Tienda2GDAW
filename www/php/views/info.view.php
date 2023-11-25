<form method="post">
    <div class="contenedor">
        <div class="caja">
            <div class="cajaUsuario">
                <div class="fila">
                    <h3>Tu Perfil</h3>
                        <div class="datos">
                            <label>Foto de perfil</label>
                            <div class="input">
                                <canvas id="canvasFotoPerfil" src="<?= $cliente['Avatar'] ?>"></canvas>
                                <input type="hidden" id="outputFoto">
                                <input type="file" id="inputFoto" accept="image/*" class="inputbox">
                                <br>
                                <input type="button" class="cambiarFoto" value="Cambiar Foto">
                            </div>
                        </div>
                        <div class="datos"><label>Usuario</label>
                            <div class="input"><input type="text" class="datoInput" id="username" value="<?= $cliente["username"] ?>" value1="<?= $cliente["username"] ?>"></div>
                        </div>
                </div>
            </div>
        </div>
        <div class="caja">
            <div class="cajaUsuario">
                <div class="fila">
                    <h3>Datos personales</h3>
                        <div class="datos"><label>Nombre</label>
                            <div class="input"><input type="text" class="datoInput" id="nombre" value="<?= $cliente["Nombre"] ?>" value1="<?= $cliente["Nombre"] ?>"></div>
                        </div>
                        <div class="datos"><label>Apellidos</label>
                            <div class="input"><input type="text" class="datoInput" id="apellidos" value="<?= $cliente["Apellidos"] ?>" value1="<?= $cliente["Apellidos"] ?>"></div>
                        </div>
                        <div class="datos"><label>Correo</label>
                            <div class="input"><input type="email" class="datoInput" id="correo" value="<?= $cliente["Correo"] ?>" value1="<?= $cliente["Correo"] ?>"></div>
                        </div>
                        <div class="datos"><label>Telefono</label>
                            <div class="input"><input type="text" class="datoInput" id="telefono" value="<?= $cliente["Telefono"] ?>" value1="<?= $cliente["Telefono"] ?>"></div>
                        </div>
                        <div class="datos"><label>Direccion</label>
                            <div class="input"><input type="text" class="datoInput" id="direccion" value="<?= $cliente["Direccion"] ?>" value1="<?= $cliente["Direccion"] ?>"></div>
                        </div>
                        <h4 style="color: #4393E4	;"><?= $mensajeUsuario ?> </h4>
                </div>
            </div>
            <button type="submit" class="guardar">Guardar</button>
        </div>
        <script src="/js/info.js"></script>
</form>
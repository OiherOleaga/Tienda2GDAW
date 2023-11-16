<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="/css/registro.css">
    <title>Login</title>

</head>

<body>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
        <div class="form-box">
            <div class="form-value">
                <form action="/registro" method="post" id="formRegistro" autocomplete="off">
                    <h2>Crear tu cuenta</h2>
                    <div class="inputbox" id="select">
                        <label for="tipo">Elige el tipo de usuario:</label>
                        <select name="tipo" id="tipo" class="inputbox">
                            <option value="cliente" selected>Cliente</option>
                            <option value="comerciante">Empresa</option>
                        </select>
                    </div>
                    <div class="inputbox" id="inputBoxNombre">
                        <input type="text" name="nombre" required>
                        <label>Nombre</label>
                    </div>
                    <div class="inputbox" id="inputBoxApellidos">
                        <input type="text" name="apellidos" required>
                        <label>Apellido</label>
                    </div>
                    <div class="inputbox" id="inputBoxUsername">
                        <input type="text" name="username" required>
                        <label>Nombre de usuario</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="contrasenia" class="password" required>
                        <label>Contraseña</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" class="password" required>
                        <label>Confirmar contraseña</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="correo" required>
                        <label>Mail</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="telefono" required>
                        <label>Telefono</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="direccion" required>
                        <label>Direccion</label>
                    </div>
                    <div id="divFotoPerfil" class="inputbox">
                        <canvas id="canvasFotoPerfil" width="100" height="100"></canvas>
                        <input type="hidden" name="avatar" id="outputFoto">
                        <input type="file" id="inputFoto" accept="image/*" class="inputbox">
                    </div>
                    <button type="submit">Crear cuenta</button>

                    <div class="iniciar">
                        <p> <a href="/login">Ya tengo una cuenta Iniciar sesion</a></p>
                    </div>
                </form>
                <p id="errorUsuario"><?= $errorUsuario !== "" ? $errorUsuario : ""?></p> 
            </div>
        </div>
        </section>
    </div>
    </div>
    </div>
    </div>

    <script src="/js/registro.js" defer></script>
    <?php require "partials/scriptError.php" ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Pragma" content="no-cache">
    <!--<link rel="stylesheet" href="/login.css"> -->
    <title>Login</title>

</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="registro.php" method="post" id="formRegistro">
                    <h2>Crear cuenta</h2>
                    <div>
                        <label for="tipo">Elige el tipo de usuario:</label>
                        <select name="tipo" id="tipo">
                            <option value="cliente" selected>Normal</option>
                            <option value="comerciante">Empresa/Vendedor</option>
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
                        <label>Contraseña</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="correo" required>
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
                    <div id="divFotoPerfil">
                        <canvas id="canvasFotoPerfil" width="200" height="200"></canvas>
                        <input type="hidden" name="avatar" id="outputFoto">
                        <input type="file" id="inputFoto" accept="image/*">
                    </div>
                    <button type="submit">Crear cuenta</button>

                    <div class="register">
                            <p>Ya tengo una cuenta <a href="login.php">Iniciar sesion</a></p>
                    </div>
                </form>
                <p id="errorUsuario"><?= $errorUsuario !== "" ? $errorUsuario : ""?></p> 
            </div>
        </div>
    </section>
    <script src="/js/registro.js"></script>
    <?php require "partials/scriptError.php" ?>
</body>

</html>

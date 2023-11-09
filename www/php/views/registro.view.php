<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="/login.css">
    <title>Login</title>

</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="registro.php" method="post">
                    <h2>Crear cuenta</h2>
                    <div>
                        <label for="tipo">Elige el tipo de usuario:</label>
                        <select name="tipo" id="tipo">
                            <option value="cliente" selected>Normal</option>
                            <option value="comerciante">Empresa/Vendedor</option>
                        </select>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="nombre" required>
                        <label>Nombre</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="apellido" required>
                        <label>Apellido</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="username" required>
                        <label>Nombre de usuario</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label>Contraseña</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" required>
                        <label>Contraseña</label>
                    </div>
                    <div class="inputbox">
                        <input type="mail" name="mail" required>
                        <label>Mail</label>
                    </div>
                    <div id="divFotoPerfil">
                        <p>Elige tu foto</p>
                        <img src="" id="fotoPerfil" alt="fotoPerfil" onerror="ponerPredeterminado(this)">
                        <input type="file" name="avatar" id="inputFoto">
                    </div>
                    <button type="submit">Crear cuenta</button>

                    <div class="register">
                            <p>Ya tengo una cuenta <a href="login.php">Iniciar sesion</a></p>
                    </div>
                </form>
                <p><?= $errorUsuario !== "" ? $errorUsuario : ""?></p> 
            </div>
        </div>
    </section>
    <script src="/js/registro.js"></script>
    <?php require "partials/scriptError.php" ?>
</body>

</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../login.css">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Login</title>

</head>

<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
<div class="form-box">
            <div class="form-value">
                <form action="/php/login.php" method="post">
                    <h2>¡Te damos la bienvenida!</h2>
                    <div class="inputbox">
                        <input type="text" name="usuario" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for="ck"><input type="checkbox" id="ck">Recordar <a href="#">Olvid&eacute; mi
                                contraseña</a></label>
                    </div>
                    <p><?= $errorUsuario !== "" ? $errorUsuario : ""?></p> 
                    <button type="submit">Iniciar sesion</button>
                    <div class="register">
                        <p><a href="/php/registro.php">Registrarse</a></p>
                    </div>
                </form>
            </div>
        </div>
</div>
    <?php require "partials/scriptError.php" ?>
</body>

</html>

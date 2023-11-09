<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../login.css">
    <title>Login</title>

</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="/php/login.php" method="post">
                    <h2>Inicio de sesi&oacute;n</h2>
                    <div class="inputbox">
                        <input type="text" name="usuario" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for="ck"><input type="checkbox" id="ck">Recordar <a href="#">Olvide mi
                                contraseña</a></label>
                    </div>
                    <p><?= $errorUsuario !== "" ? $errorUsuario : ""?></p> 
                    <button type="submit">Iniciar sesion</button>
                    <div class="register">
                        <p>No tengo una cuenta <a href="/php/registro.php">Registrarse</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php require "partials/scriptError.php" ?>
</body>

</html>

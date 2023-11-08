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
                <form action="../../index.php">
                    <h2>Crear cuenta</h2>
                    <div class="inputbox">
                        <input type="text" required>
                        <label for="">Nombre de usuario</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <div class="inputbox">
                        <input type="tel" required>
                        <label for="">telefono</label>
                    </div>
                    <button type="submit">Crear cuenta</button>

                    <div class="register">
                        <p>Ya tengo una cuenta <a href="login.view.php">Iniciar sesion</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
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
        <div class="imagen"> <svg width="160" height="160" fill="none" xmlns="http://www.w3.org/2000/svg" class="Welcome__image">
                <path fill="#d4e4f6" d="M144.925 74.026a5.57 5.57 0 00-4.224-2.903c-2.789-.278-6.69.97-8.135 3.463a4.143 4.143 0 00.256 4.687 4.848 4.848 0 002.871 1.506c.521.1 1.05.15 1.581.15a9.125 9.125 0 007.387-3.804 3.015 3.015 0 00.264-3.099z"></path>
                <path fill="#04413C" d="M128.597 85.434a.728.728 0 01-.196-.027.688.688 0 01-.455-.85 13.743 13.743 0 014.035-6.203 13.78 13.78 0 016.669-3.217.697.697 0 01.701.318.696.696 0 01.085.523.678.678 0 01-.309.43.702.702 0 01-.253.094 12.367 12.367 0 00-9.616 8.464.684.684 0 01-.661.469z"></path>
                <path fill="#d4e4f6" d="M157.105 144.134c-.342-5.274-1.718-10.52-2.826-14.738-.506-1.943-.948-3.618-1.235-5.065-2.041-10.311-4.388-21.66-6.38-25.819-1.599-3.335-3.253-6.785-5.883-9.556-4.42-4.687-9.921-7.449-15.494-7.767a29.152 29.152 0 00-8.836.714c-3.997 1.088-7.502 3.995-9.616 7.981-2.16 4.096-2.347 8.646-2.525 13.024l-.027.637c-.082 1.97-.078 4.441-.055 7.103a67.65 67.65 0 00-6.794-1.506c-1.431-.191-2.944-.287-4.311.3-1.45.624-2.694 2.275-2.256 3.964.287 1.11 1.194 1.865 1.855 2.416l11.452 9.583c-.274 5.952-1.427 10.284-2.448 14.106-.373 1.397-.724 2.73-1.016 4.041a6.453 6.453 0 001.271 5.446 6.484 6.484 0 005.05 2.417h43.27a6.75 6.75 0 004.963-2.148 6.877 6.877 0 001.841-5.133z"></path>
                <path fill="#d4e4f6" d="M157.105 144.134c-.342-5.274-1.714-10.516-2.821-14.734l-.26-.983a.678.678 0 00-.92-.478 68.526 68.526 0 00-6.462 3.186c-.752.4-1.5.805-2.252 1.196-10.431 5.429-20.416 7.927-29.685 7.422a66.076 66.076 0 01-11.848-1.947.676.676 0 00-.821.491l-.314 1.179c-.378 1.41-.734 2.73-1.026 4.095a6.458 6.458 0 003.533 7.224 6.48 6.48 0 002.802.63h43.27a6.75 6.75 0 004.963-2.148 6.877 6.877 0 001.841-5.133z" opacity="0.2"></path>
                <path fill="#04413C" fill-rule="evenodd" d="M113.077 96.356a2.137 2.137 0 00-1.326-1.973 2.144 2.144 0 00-2.917 1.562 2.14 2.14 0 003.617 1.926 2.13 2.13 0 00.626-1.515m22.432-.001a2.14 2.14 0 00-1.325-1.98 2.152 2.152 0 00-2.34.465 2.144 2.144 0 103.036 3.03 2.14 2.14 0 00.629-1.515" clip-rule="evenodd"></path>
                <path fill="#04413C" d="M127.842 95.682h-12.081a.686.686 0 00-.679.673v3.24a6.71 6.71 0 002.03 4.636 6.73 6.73 0 009.388 0 6.715 6.715 0 002.03-4.636v-3.24a.684.684 0 00-.688-.673zm-6.043 9.269a5.275 5.275 0 01-3.591-1.393 5.975 5.975 0 012.196-2.487 6 6 0 013.186-.935 5.896 5.896 0 013.331 1.024 5.385 5.385 0 01-5.122 3.791z"></path>
                <path fill="#0a3093" d="M61.31 125.687c-1.8-9.515-4.676-18.916-7.46-28.013l-.456-1.533c-2.11-6.862-4.844-13.524-10.65-15.813-5.733-2.257-9.688-1.72-13.94-.85-5.013 1.032-8.262 3.185-10.194 6.743-2.056 3.786-3.395 11.904-3.19 19.303.2 7.212-.515 15.471-1.586 18.37-.761 2.038-2.493 4.81-4.02 7.239-.774 1.229-1.503 2.385-2.028 3.331-1.49 2.69-2.92 7.063-2.041 10.548.784 3.099 2.05 6.403 7.205 6.403h38.868c8.476 0 9.766-6.426 10.317-9.17.76-3.776.465-9.81-.825-16.558z"></path>
                <path fill="#670A6F" d="M62.148 140.307a.674.674 0 00-.574-.186 83.205 83.205 0 01-14.532.801 27.403 27.403 0 01-5.469-.619 32.046 32.046 0 01-5.628-2.13 726.123 726.123 0 01-9.903-4.55l-.305-.141c-3.518-1.625-7.155-3.308-10.964-4.373-.912-.255-1.86-.455-2.78-.646a.68.68 0 00-.711.318c-.502.792-1.012 1.593-1.468 2.348-.77 1.229-1.503 2.389-2.028 3.336-1.49 2.689-2.92 7.062-2.041 10.548.784 3.098 2.05 6.402 7.205 6.402h38.868c8.476 0 9.766-6.425 10.317-9.169.082-.401.15-.846.214-1.365a.67.67 0 00-.2-.574z" opacity="0.2"></path>
                <path fill="black" fill-rule="evenodd" d="M29.143 96.446a1.992 1.992 0 00-1.454-1.67 1.999 1.999 0 00-2.517 1.781 1.99 1.99 0 001.098 1.923 1.998 1.998 0 002.873-2.034m20.711-2.612a1.992 1.992 0 00-1.456-1.67 2 2 0 00-2.103.703 1.992 1.992 0 001.832 3.197 1.989 1.989 0 001.676-1.453c.068-.253.085-.517.05-.777z" clip-rule="evenodd"></path>
                <path fill="black" d="M37.4 101.516a4.396 4.396 0 01-4.343-3.85l-.255-1.984a.686.686 0 011.274-.426.683.683 0 01.084.253l.251 1.984a3.038 3.038 0 002.205 2.63 3.046 3.046 0 003.777-2.184c.1-.394.118-.804.056-1.205l-.255-1.984a.687.687 0 011.1-.626.682.682 0 01.258.457l.25 1.98a4.394 4.394 0 01-2.19 4.376 4.417 4.417 0 01-2.211.579z"></path>
                <path fill="#D4E4F6" d="M28.314 99.813l-1.49.186a1.921 1.921 0 00-1.063 3.293c.35.334.815.523 1.3.529.08.005.161.005.242 0l1.494-.186a1.921 1.921 0 001.664-2.143 1.918 1.918 0 00-2.146-1.661v-.019zm22.859-.951a1.91 1.91 0 00-1.395-1.609 1.918 1.918 0 00-.747-.052l-1.495.187a1.924 1.924 0 00-1.663 2.143 1.926 1.926 0 001.9 1.679c.082.004.164.004.246 0l1.49-.187a1.92 1.92 0 001.664-2.143v-.018z"></path>
                <path fill="#0a3093" d="M70.966 123.035a2.013 2.013 0 00-1.8-1.243 5.227 5.227 0 00-2.542.533l-9.156 3.686a.682.682 0 00-.434.643c0 .092.02.182.056.267a.67.67 0 00.565.418l-1.034 10.193-.51.392a.677.677 0 00-.232.76.68.68 0 00.646.464c.15 0 .296-.049.415-.141.045-.037 4.666-3.573 6.922-5.406.319-.26.647-.515.97-.774a25.54 25.54 0 003.956-3.64c.032-.032 3.076-3.923 2.178-6.152z"></path>
                <path fill="black" d="M62.431 134.123a.68.68 0 01-.674-.587 313.002 313.002 0 00-.807-5.488 2415.62 2415.62 0 01-.597-3.881l-.169-1.106a.69.69 0 011.095-.657.687.687 0 01.272.452l.17 1.106c.204 1.338.405 2.639.596 3.877.287 1.82.565 3.718.811 5.511a.677.677 0 01-.583.769l-.114.004z"></path>
                <path fill="#F49709" d="M85.218 120.536l-5.222-22.243a2.385 2.385 0 00-2.867-1.779l-32.57 7.613a2.39 2.39 0 00-1.781 2.867l5.213 22.242a2.39 2.39 0 002.866 1.757l32.575-7.613a2.391 2.391 0 001.484-1.062 2.372 2.372 0 00.293-1.8l.01.018z"></path>
                <path fill="#803700" d="M85.22 120.535l-5.223-22.242a2.35 2.35 0 00-1.062-1.484 2.413 2.413 0 00-1.823-.295l-11.666 2.73a.688.688 0 00-.51.819l5.988 25.555a.684.684 0 00.665.523.608.608 0 00.16 0l11.666-2.73a2.39 2.39 0 001.484-1.062 2.375 2.375 0 00.293-1.8l.028-.014z" opacity="0.3"></path>
                <path fill="black" d="M71.614 126.141a.684.684 0 01-.666-.523l-5.992-25.555a.682.682 0 011.33-.31l5.993 25.551a.683.683 0 01-.665.837z"></path>
                <path fill="#0a3093" d="M38.771 124.378l13.671-2.275c1.336-.219 2.93-.351 3.81.678a2.635 2.635 0 01.351 2.512 7.083 7.083 0 01-1.394 2.234 51.117 51.117 0 01-10.026 9.219"></path>
                <path fill="black" d="M45.186 137.451a.674.674 0 01-.556-.291.681.681 0 01-.02-.759.67.67 0 01.184-.192 50.254 50.254 0 009.885-9.101 6.405 6.405 0 001.276-2.011 1.977 1.977 0 00-.223-1.852c-.643-.751-1.97-.646-3.19-.455l-13.672 2.252a.683.683 0 01-.516-.121.694.694 0 01-.27-.72.686.686 0 01.31-.429.697.697 0 01.253-.095l13.671-2.252c1.586-.26 3.359-.355 4.439.91a3.308 3.308 0 01.483 3.185 7.66 7.66 0 01-1.522 2.453 51.681 51.681 0 01-10.14 9.337.688.688 0 01-.392.141z"></path>
                <path fill="#04413C" d="M117.975 127.926a.712.712 0 01-.301-.068 52.947 52.947 0 01-8.659-5.315 7.625 7.625 0 01-1.968-1.952 3.269 3.269 0 01-.315-3.072c.729-1.551 2.57-1.87 4.102-1.979 5.691-.401 11.47-.542 17.175-.423a.695.695 0 01.624.434.686.686 0 01-.388.884.677.677 0 01-.263.047 188.82 188.82 0 00-17.053.418c-1.153.082-2.529.292-2.957 1.202a1.946 1.946 0 00.237 1.765c.446.623 1 1.161 1.636 1.588a51.454 51.454 0 008.43 5.174.683.683 0 01-.3 1.297z"></path>
                <path fill="#CFD8DC" d="M68.09 59.688a.684.684 0 01-.684-.682V57.95a.682.682 0 011.167-.483c.128.129.2.302.2.483v1.056a.682.682 0 01-.683.682zm3.351 2.462h-1.057a.684.684 0 01-.484-1.165.684.684 0 01.484-.2h1.057a.684.684 0 01.483 1.165.684.684 0 01-.483.2zm-3.526 3.345a.684.684 0 01-.683-.683v-1.055a.683.683 0 011.367 0v1.056a.682.682 0 01-.684.682zm-2.29-3.523h-1.058a.684.684 0 01-.483-1.165.684.684 0 01.483-.2h1.058a.684.684 0 01.483 1.166.684.684 0 01-.483.2zM89.62 88.447a.684.684 0 01-.684-.683v-.846a.682.682 0 011.166-.483.68.68 0 01.2.483v.846a.682.682 0 01-.683.683zm2.678 1.993h-.847a.684.684 0 01-.484-1.165.684.684 0 01.484-.2h.847a.684.684 0 01.484 1.165.684.684 0 01-.484.2zm-2.819 2.653a.684.684 0 01-.684-.683v-.842a.682.682 0 011.167-.482c.129.128.2.301.2.482v.842a.682.682 0 01-.683.683zm-1.833-2.817h-.848a.684.684 0 01-.483-1.165.684.684 0 01.483-.2h.848a.684.684 0 01.483 1.165.684.684 0 01-.483.2zm11.281-20.651a.689.689 0 01-.685-.683.676.676 0 01.202-.482l.866-.865a.684.684 0 01.966.965l-.866.865a.689.689 0 01-.483.2zm.718 4.755a.698.698 0 01-.483-.2l-.866-.864a.686.686 0 01.221-1.114.68.68 0 01.745.149l.866.865a.676.676 0 01.148.743.686.686 0 01-.63.421zm-5.628-.145a.698.698 0 01-.483-.2.687.687 0 010-.965l.866-.865a.685.685 0 01.971.965l-.87.887a.68.68 0 01-.484.178zm1.017-4.755a.672.672 0 01-.483-.201l-.884-.864a.682.682 0 01.966-.965l.866.864a.677.677 0 010 .965.661.661 0 01-.465.2zM78.405 85.434a.68.68 0 01-.688-.591c-.11-1.056-.456-2.73-.911-3.185-.456-.455-2.129-.792-3.19-.91a.684.684 0 01-.484-1.166.684.684 0 01.484-.2c1.061-.109 2.734-.455 3.19-.91.455-.455.793-2.13.911-3.185a.682.682 0 011.167-.483c.128.128.2.302.2.483.11 1.056.456 2.73.912 3.185.455.455 2.128.792 3.19.91a.684.684 0 01.483 1.166.684.684 0 01-.483.2c-1.058.104-2.735.455-3.19.91-.456.455-.798 2.156-.912 3.185a.683.683 0 01-.679.61v-.019zm-1.6-5.355a2.511 2.511 0 011.623 1.62c.138-.371.345-.713.61-1.006a3.193 3.193 0 011.008-.614 2.476 2.476 0 01-1.618-1.616c-.14.37-.35.712-.615 1.006a3.044 3.044 0 01-1.007.61zM91.387 63.93a.684.684 0 01-.679-.61c-.141-1.366-.615-3.81-1.299-4.492-.683-.683-3.121-1.156-4.493-1.297a.684.684 0 01-.483-1.165.684.684 0 01.483-.2c1.367-.141 3.81-.614 4.493-1.297.684-.682 1.158-3.108 1.3-4.473a.678.678 0 01.678-.619.685.685 0 01.68.62c.14 1.364.619 3.808 1.298 4.486.679.678 3.122 1.156 4.493 1.297a.684.684 0 01.484 1.165.684.684 0 01-.484.2c-1.367.14-3.81.619-4.493 1.297-.684.678-1.158 3.117-1.299 4.491a.682.682 0 01-.679.596zm-2.94-7.077a5.015 5.015 0 011.928 1.01c.477.56.823 1.22 1.012 1.93a4.95 4.95 0 011.012-1.93 4.97 4.97 0 011.927-1.01 4.91 4.91 0 01-1.927-.996 4.927 4.927 0 01-1.012-1.939 4.925 4.925 0 01-1.012 1.939 4.91 4.91 0 01-1.927.996zm68.336 95.472H4.119a.684.684 0 01-.484-1.165.684.684 0 01.484-.2h152.664a.684.684 0 010 1.365z"></path>
                <path fill="#0a3093" d="M34.958 77.921a8.195 8.195 0 00-3.94-4.432 8.213 8.213 0 00-5.903-.619l-.424-1.146 4.917-.57a2.086 2.086 0 001.832-1.86 2.09 2.09 0 00-.118-.924 2.042 2.042 0 00-1.308-1.26 2.077 2.077 0 00-1.823.245l-4.703 3.135-5.596.651a2.084 2.084 0 00-1.815 1.864c-.03.313.01.627.12.921a2.042 2.042 0 001.308 1.26 2.08 2.08 0 001.805-.246l4.1-2.73.424 1.147a8.196 8.196 0 00-4.097 4.29 8.18 8.18 0 00-.127 5.926.682.682 0 00.875.414l7.036-2.585 2.994-1.096 4.042-1.484a.687.687 0 00.406-.878l-.005-.023zm-9.333 2.699l-.911.337c-1.18-3.64-.702-6.262.228-6.603a.772.772 0 01.255-.041c1.016 0 2.867 1.697 4.197 4.928l-3.769 1.379zm3.332-12.127a.712.712 0 011.075.369.732.732 0 01-.064.623.725.725 0 01-.528.337l-2.958.34 2.475-1.67zm-10.427 5.31a.711.711 0 01-.62.087.72.72 0 01-.456-.433.732.732 0 01.064-.623.723.723 0 01.529-.337l2.957-.341-2.474 1.647zm4.215 1.866c-.26 1.524-.045 3.558.68 5.76l-2.735 1.006a6.816 6.816 0 012.055-6.766zm7.92 3.099c-.874-2.139-2.027-3.827-3.19-4.824a6.844 6.844 0 015.952 3.823l-2.761 1z"></path>
            </svg>
        </div>
        <div class="form-box">
            <div class="cancelar"><a href="/"><svg class="btnCancelar" width="20px" height="20px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#000000" fill="none">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <line x1="8.06" y1="8.06" x2="55.41" y2="55.94"></line>
                            <line x1="55.94" y1="8.06" x2="8.59" y2="55.94"></line>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="form-value">
                <form action="/registro" method="post" id="formRegistro" autocomplete="off">
                    <h2>Crear tu cuenta</h2>
                    <div class="inputbox" id="select">
                        <select name="tipo" id="tipo">
                            <option value="cliente" selected>Cliente</option>
                            <option value="comerciante">Empresa</option>
                        </select>
                    </div>
                    <div class="inputbox" id="inputBoxNombre">
                        <input type="text" name="nombre" value="<?= postDato("nombre") ?>" required>
                        <label>Nombre</label>
                    </div>
                    <div class="inputbox" id="inputBoxApellidos">
                        <input type="text" name="apellidos" value="<?= postDato("apellidos") ?>" required>
                        <label>Apellido</label>
                    </div>
                    <div class="inputbox" id="inputBoxUsername">
                        <input type="text" name="username" value="<?= postDato("username") ?>" required>
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
                        <input type="text" name="correo" value="<?= postDato("correo") ?>" required>
                        <label>Mail</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="telefono" value="<?= postDato("telefono") ?>" required>
                        <label>Telefono</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="direccion" value="<?= postDato("direccion") ?>" required>
                        <label>Direccion</label>
                    </div>
                    <div id="divFotoPerfil" class="inputbox">
                        <canvas id="canvasFotoPerfil" width="100" height="100"></canvas>
                        <input type="hidden" name="avatar" id="outputFoto">
                        <input type="file" id="inputFoto" accept="image/*" class="inputbox">
                    </div>
                    <button type="submit">Crear cuenta</button>
                    <div class="iniciar">
                        <p> <a href="/login">¿Ya tienes una cuenta?</a></p>
                    </div>
                </form>
                <h4 id="errorUsuario" style="color: red;"><?= $errorUsuario !== "" ? $errorUsuario : "" ?></h4>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <script src="/js/registro.js"></script>
    <?php require "php/views/partials/scriptError.php" ?>
</body>

</html>
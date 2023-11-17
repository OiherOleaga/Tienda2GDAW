<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS Style -->
    <link rel="stylesheet" href="/index.css">
    <!-- Favicon -->
    <link rel="icon" href="/assets/Logo/favicon.png">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
    <title>InfiniteChoice</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="/"><img src="/assets/Logo/logo.png" alt="logo"></a>
        </div>
        <div class="navegacion">
            <a href="/">Inicio</a>
            <a href="/productos">Productos</a>
            <a href="/contact">Cont&aacute;ctanos</a>
        </div>
        <div class="botones">
            <button class="avatar" id="btnAvatar"><img src='<?= $cliente['Avatar'] ?>' alt="avatar del cliente"></button>
        </div>
        <div id="menuDesp" class="menuDesp">
            <a href="perfilUsuario/info">Ver perfil</a> 
            <a id="cerrarSesion">Cerrar Sesi&oacute;n</a>
        </div>
    </header>
    <script src="/js/headerUsuario.js"></script>
    <main>
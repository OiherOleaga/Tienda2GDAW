let favoritos = document.getElementsByClassName("link")
for(let link of favoritos){
    link.addEventListener("click", function (event) {
        event.preventDefault();
        history.pushState(null, null, link.href);
        }
    )
}


let contenido= document.getElementsByClassName("contenido");
fetch("/perfilUsuario/info").then(respuesta=>);
contenido.innerHTML=`<form method="post">
<div class="contenedor">
    <div class="caja">
        <div class="cajaUsuario">
            <div class="fila">
                <h3>Tu Perfil</h3>
                <div class="datos"><label>Foto de perfil</label>
                    <div class="input"><img src="<?= $cliente["Avatar"] ?>"><br><button class="cambiarFoto">Cambiar
                            Foto</button></div>
                </div>
                <div class="datos"><label>Usuario</label>
                    <div class="input"><input type="text" value="<?= $cliente["username"] ?>"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="caja">
        <div class="cajaUsuario">
            <div class="fila">
                <h3>Datos personales</h3>
                <div class="datos"><label>Nombre</label>
                    <div class="input"><input type="text" value="<?= $cliente["Nombre"] ?>"></div>
                </div>
                <div class="datos"><label>Apellidos</label>
                    <div class="input"><input type="text" value="<?= $cliente["Apellidos"] ?>"></div>
                </div>
                <div class="datos"><label>Correo</label>
                    <div class="input"><input type="email" value="<?= $cliente["Correo"] ?>"></div>
                </div>
                <div class="datos"><label>Telefono</label>
                    <div class="input"><input type="text" value="<?= $cliente["Telefono"] ?>"></div>
                </div>
                <div class="datos"><label>Direccion</label>
                    <div class="input"><input type="text" value="<?= $cliente["Direccion"] ?>"></div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="guardar">Guardar</button>
</div>
</form>`;

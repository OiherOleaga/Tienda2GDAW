INSERT INTO Comerciantes (Avatar, Nombre_empresa, Contrasenia, Correo, Telefono, Direccion)
VALUES
    ('avatar1.jpg', 'GAME', 'contrasenia1', 'correo1@example.com', '123-456-7890', 'Dirección 1');


INSERT INTO Productos (Titulo, Precio, Descripcion, Foto, ID_Comerciante)
VALUES
    ('Ordenador de torre', 219.99, 'Descripción del Producto 1', 'https://ventor.mobi/1318-thickbox_default/torre-pc-gaming.jpg', 1),
    ('Portatil', 24.99, 'Descripción del Producto 2', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_106496945?x=480&y=334&format=jpg&quality=80&sp=yes&strip=yes&trim&ex=480&ey=334&align=center&resizesource&unsharp=1.5x1+0.7+0.02&cox=0&coy=0&cdx=480&cdy=334', 1),
    ('PlayStation 5', 399.99, 'Descripción del Producto 3', 'https://static.carrefour.es/hd_510x_/crs/cdn_static/catalog/hd/579679_00_1.jpg', 1),
    ('Nintendo Switch', 129.99, 'Descripción del Producto 4', 'https://oechsle.vteximg.com.br/arquivos/ids/6372337-1000-1000/image-ea547ea58f7b4c4fa7fbe1986b447cee.jpg?v=637756182589030000', 1),
    ('PlayStation 4', 299.99, 'Descripción del Producto 5', 'https://m.media-amazon.com/images/I/71GWJXGeZsL._AC_UF894,1000_QL80_.jpg', 1),
    ('Portatil MSI', 199.99, 'Descripción del Producto 6', 'https://ultimainformatica.com/1240590-thickbox_default/portatil-msi-raider-ge67hx-12ugs-024es.jpg', 1),
    ('Nintendo3DS', 12.99, 'Descripción del Producto 7', 'https://m.media-amazon.com/images/I/81cJFBmx-3L.jpg', 1),
    ('MAC', 27.99, 'Descripción del Producto 8', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuIhpCHI9MAaEcjRAbGTMtlX3mtp8QeGEmKQ14RSpFeVPsaTKI6ZPWdhYpMkr3NEzLDDE&usqp=CAU', 1),
    ('PlayStation 3', 34.99, 'Descripción del Producto 9', 'https://m.media-amazon.com/images/I/61AlsXa+zdL.jpg', 1),
    ('Videojuego PS5', 21.99, 'Descripción del Producto 10', 'https://m.media-amazon.com/images/I/814wINlWcrL.jpg', 1);

INSERT INTO Clientes (Avatar, Nombre, username, Apellidos, Contrasenia, Correo, Telefono, Direccion) 
VALUES
('https://i.blogs.es/1039bf/langostinos/450_1000.jpg', 'a', 'a', 'a', 'a', 'a@email.com', '1234567890', 'portal de foronda, vitoria-gasteiz'),
('https://images3.memedroid.com/images/UPLOADED578/5fbfcb10c4a8c.jpeg', 'María', 'maria456', 'González', 'password456', 'maria@email.com', '9876543210', 'Avenida 456, Ciudad'),
('avatar3.jpg', 'Pedro', 'pedro789', 'López', 'mysecret789', 'pedro@email.com', '5555555555', 'Calle Principal, Ciudad'),
('avatar4.jpg', 'Ana', 'ana123', 'Martínez', 'securepwd123', 'ana@email.com', '3333333333', 'Calle Secundaria, Ciudad'),
('avatar5.jpg', 'Luis', 'luis456', 'Ramírez', 'mypassword456', 'luis@email.com', '7777777777', 'Calle 789, Ciudad'),
('avatar6.jpg', 'Laura', 'laura123', 'Sánchez', 'laurapwd123', 'laura@email.com', '9999999999', 'Avenida 789, Ciudad'),
('avatar7.jpg', 'Carlos', 'carlos789', 'García', 'carlospwd789', 'carlos@email.com', '6666666666', 'Calle 456, Ciudad'),
('avatar8.jpg', 'Sofía', 'sofia123', 'Hernández', 'sofiapwd123', 'sofia@email.com', '2222222222', 'Avenida 123, Ciudad'),
('avatar9.jpg', 'Miguel', 'miguel456', 'Torres', 'miguelpwd456', 'miguel@email.com', '8888888888', 'Calle 789, Ciudad'),
('avatar10.jpg', 'Elena', 'elena123', 'Fernández', 'elenapwd123', 'elena@email.com', '1111111111', 'Avenida 456, Ciudad');

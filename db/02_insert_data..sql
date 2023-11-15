INSERT INTO Comerciantes (Avatar, Nombre_empresa, Contrasenia, Correo, Telefono, Direccion)
VALUES
    ('https://yt3.googleusercontent.com/9WgVvMb5NkRQeC2Oeu0WL9t7phgInjMq1zju6TZsvT5nLaCO9lALk_-GnL7UjsB_bo4aEbMi4g=s900-c-k-c0x00ffffff-no-rj', 'GAME', 'game', 'game@game.es', '938706714', 'Zaramaga Kalea, 1, 01013 Gasteiz');


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
('https://i.blogs.es/1039bf/langostinos/450_1000.jpg', 'Oiher', 'oiherPerron', 'Oleaga Guerrero', '12345', 'oiheroleaga@email.com', '657659280', 'calle guetaria, vitoria-gasteiz'),
('https://i.pinimg.com/originals/f5/b3/b7/f5b3b7a64c253f882bfdd4337c7721ac.jpg', 'David', 'DavidMamalon', 'Moreno Alonso', '12345', 'davidcaca@gmail.com', '9876543210', 'coronela ibaibarriaga, vitoria-gasteiz'),
('https://images3.memedroid.com/images/UPLOADED578/5fbfcb10c4a8c.jpeg', 'Anartz', 'a', 'Pagaldai', 'a', 'pedro@email.com', '5555555555', 'Albacete');

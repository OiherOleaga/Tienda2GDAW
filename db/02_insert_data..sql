INSERT INTO Comerciantes (Avatar, Nombre_empresa, Contrasenia, Correo, Telefono, Direccion)
VALUES
    ('https://yt3.googleusercontent.com/9WgVvMb5NkRQeC2Oeu0WL9t7phgInjMq1zju6TZsvT5nLaCO9lALk_-GnL7UjsB_bo4aEbMi4g=s900-c-k-c0x00ffffff-no-rj', 'GAME', '6ca5cab77e702c787b4c14b3d3bf26bad43da606be6eed04ab0b9720120ae081', 'game@game.es', '938706714', 'Zaramaga Kalea, 1, 01013 Gasteiz'),
    ('', 'aa', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', 'aa@gmail.com', '123456789', 'Vitoria');

-- Inserciones para las columnas Titulo, Precio, Descripcion, e ID_Comerciante (ID_Comerciante limitado a 1 y 2)
INSERT INTO Productos (Titulo, Precio, Descripcion, ID_Comerciante)
VALUES
    ('Ordenador de torre', 219.99, 'Potente ordenador de torre diseñado para gamers y profesionales. Equipado con procesador Intel Core i7, 16GB de RAM y tarjeta gráfica NVIDIA GeForce RTX 3080.', 1),
    ('Portátil', 24.99, 'Portátil ligero y versátil para uso diario. Pantalla de 14 pulgadas, procesador AMD Ryzen 5, 8GB de RAM y almacenamiento SSD de 256GB.', 1),
    ('PlayStation 5', 399.99, 'La consola de nueva generación de Sony con capacidad para juegos en 4K. Incluye un controlador DualSense con retroalimentación háptica para una experiencia inmersiva.', 1),
    ('Nintendo Switch', 129.99, 'Consola híbrida que se puede usar como consola de sobremesa o portátil. Incluye dos controles Joy-Con y es compatible con una amplia variedad de juegos.', 1),
    ('PlayStation 4', 299.99, 'Consola de juegos popular con biblioteca extensa de títulos. Incluye un controlador inalámbrico DualShock 4 y capacidad para transmitir contenido multimedia.', 1),
    ('Portátil MSI', 199.99, 'Portátil de alta gama para juegos con pantalla de 15.6 pulgadas, procesador Intel Core i5, 16GB de RAM y tarjeta gráfica NVIDIA GTX 1660 Ti.', 1),
    ('Nintendo3DS', 12.99, 'Consola portátil Nintendo 3DS con pantalla 3D sin necesidad de gafas. Incluye dos pantallas, cámara integrada y compatibilidad con juegos clásicos de Nintendo.', 1),
    ('MAC', 27.99, 'Sistema operativo macOS diseñado para computadoras Mac. Incluye una interfaz intuitiva, seguridad avanzada y compatibilidad con software creativo.', 1),
    ('PlayStation 3', 34.99, 'Consola de juegos clásica con una biblioteca impresionante de títulos. Incluye un controlador inalámbrico DualShock 3 y capacidad para reproducción de Blu-ray.', 1),
    ('Videojuego PS5', 21.99, 'Último título de aventuras para PlayStation 5. Gráficos asombrosos, jugabilidad envolvente y una historia cautivadora que te mantendrá entretenido durante horas.', 1),
    ('PlayStation 5', 399.99, 'La consola de nueva generación de Sony con capacidad para juegos en 4K. Incluye un controlador DualSense con retroalimentación háptica para una experiencia inmersiva.', 2),
    ('Tablet Android', 149.99, 'Tablet Android de 10 pulgadas con procesador rápido, 64GB de almacenamiento y una pantalla de alta resolución. Perfecta para entretenimiento y productividad.', 2),
    ('Smartphone Samsung', 299.99, 'Potente smartphone Samsung con pantalla AMOLED de 6.5 pulgadas, cámara triple de 48MP y batería de larga duración. Rendimiento excepcional para multitarea.', 2),
    ('Teclado Mecánico', 79.99, 'Teclado mecánico RGB con interruptores Cherry MX. Diseño duradero y retroiluminación personalizable para una experiencia de escritura y juego óptima.', 2),
    ('Auriculares Inalámbricos', 49.99, 'Auriculares inalámbricos con cancelación de ruido para una experiencia auditiva inmersiva. Batería de larga duración y cómodos para uso prolongado.', 2),
    ('Monitor Gaming', 329.99, 'Monitor gaming de 27 pulgadas con frecuencia de actualización de 144Hz y resolución QHD. Colores vibrantes y tiempo de respuesta rápido para una experiencia de juego suave.', 2),
    ('Cámara DSLR', 799.99, 'Cámara DSLR profesional con sensor de imagen de alta resolución y capacidad para grabación de video en 4K. Ideal para fotógrafos y cineastas.', 1),
    ('Impresora Multifunción', 129.99, 'Impresora multifunción con escáner y copiadora integrados. Conectividad inalámbrica y fácil integración con dispositivos móviles para imprimir desde cualquier lugar.', 1),
    ('Silla de Oficina', 149.99, 'Silla de oficina ergonómica con soporte lumbar y ajuste de altura. Diseño elegante y cómodo para largas horas de trabajo.', 1),
    ('Horno Eléctrico', 199.99, 'Horno eléctrico de convección con capacidad para asar, hornear y tostar. Control digital y múltiples funciones para cocinar con precisión.', 1),
    ('Licuadora', 49.99, 'Licuadora potente con motor de alto rendimiento. Perfecta para hacer batidos, jugos y sopas. Fácil de limpiar y duradera.', 1),
    ('Reloj Inteligente', 129.99, 'Reloj inteligente con pantalla táctil a color, monitor de actividad y notificaciones inteligentes. Resistente al agua y compatible con dispositivos iOS y Android.', 2),
    ('Mochila Portátil', 39.99, 'Mochila portátil con compartimentos acolchados para laptops y tabletas. Diseño moderno y duradero para llevar tus dispositivos de manera segura.', 2),
    ('Altavoces Bluetooth', 59.99, 'Altavoces Bluetooth inalámbricos con sonido de alta calidad. Batería recargable de larga duración y diseño compacto para llevar la música a donde vayas.', 2),
    ('Batería Externa', 29.99, 'Batería externa de alta capacidad para cargar dispositivos móviles en movimiento. Diseño delgado y portátil para mantener tus dispositivos siempre encendidos.', 2),
    ('Botella de Agua Inteligente', 19.99, 'Botella de agua inteligente con recordatorio de hidratación y seguimiento del consumo de agua. Ideal para aquellos que desean mantenerse hidratados', 2);



INSERT INTO Clientes (Avatar, Nombre, username, Apellidos, Contrasenia, Correo, Telefono, Direccion) 
VALUES
('https://i.blogs.es/1039bf/langostinos/450_1000.jpg', 'Oiher', 'oiherPerron', 'Oleaga Guerrero', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'oiheroleaga@email.com', '657659280', 'calle guetaria, vitoria-gasteiz'),
('https://i.pinimg.com/originals/f5/b3/b7/f5b3b7a64c253f882bfdd4337c7721ac.jpg', 'David', 'DavidMamalon', 'Moreno Alonso', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'davidcaca@gmail.com', '9876543210', 'coronela ibaibarriaga, vitoria-gasteiz'),
('https://images3.memedroid.com/images/UPLOADED578/5fbfcb10c4a8c.jpeg', 'Anartz', 'a', 'Pagaldai', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', 'pedro@email.com', '5555555555', 'Albacete');

INSERT INTO Categorias (Nombre) VALUES
    ('Tecnologia');


INSERT INTO Categorias_Productos (ID_Categorias, ID_Producto) VALUES
    (1, 1), 
    (1, 2),
    (1, 3),
    (1, 4),
    (1, 5),
    (1, 6),
    (1, 7),
    (1, 8),
    (1, 9),
    (1, 10),
    (1, 11),
    (1, 12),
    (1, 13),
    (1, 14),
    (1, 15),
    (1, 16),
    (1, 17),
    (1, 18),
    (1, 19),
    (1, 20),
    (1, 21),
    (1, 22),
    (1, 23),
    (1, 24),
    (1, 25),
    (1, 26);


-- Insertar datos en la tabla Fotos_producto
INSERT INTO Fotos_producto (ID_Producto, URL) VALUES
    (1, 'https://media.game.es/COVERV2/3D_L/186/186150.png'),
    (2, 'https://m.media-amazon.com/images/I/31KrKAKoLrL._SL500_.jpg'),
    (3, 'https://m.media-amazon.com/images/I/31aNiWCZlQL._AC_UF894,1000_QL80_.jpg'),
    (4, 'https://media.game.es/COVERV2/3D_L/P04/P04566.png'),
    (5, 'https://media.game.es/COVERV2/3D_L/P04/P04560.png'),
    (6, 'https://media.game.es/COVERV2/3D_L/V1G/V1GQYE.png'),
    (7, 'https://media.game.es/COVERV2/3D_L/100/100774.png'),
    (8, 'https://media.game.es/COVERV2/3D_L/221/221099.png'),
    (9, 'https://media.game.es/COVERV2/3D_L/088/088706.png'),
    (10, 'https://media.game.es/COVERV2/3D_L/201/201389.png'),
    (11, 'https://media.game.es/COVERV2/3D_L/182/182523.png'),
    (12, 'https://media.game.es/COVERV2/3D_L/V1G/V1GFX5.png'),
    (13, 'https://media.game.es/COVERV2/3D_L/167/167575.png'),
    (14, 'https://media.game.es/COVERV2/3D_L/221/221331.png'),
    (15, 'https://media.game.es/COVERV2/3D_L/225/225019.png'),
    (16, 'https://media.game.es/COVERV2/3D_L/199/199933.png'),
    (17, 'https://media.game.es/COVERV2/3D_L/117/117685.png'),
    (18, 'https://media.game.es/COVERV2/3D_L/V1G/V1GVNC.png'),
    (19, 'https://media.game.es/COVERV2/3D_L/220/220187.png'),
    (20, 'https://media.game.es/COVERV2/3D_L/V1G/V1G0Q8.png'),
    (21, 'https://media.game.es/COVERV2/3D_L/V1G/V1GDOU.png'),
    (22, 'https://media.game.es/COVERV2/3D_L/215/215635.png'),
    (23, 'https://media.game.es/COVERV2/3D_L/209/209763.png'),
    (24, 'https://media.game.es/COVERV2/3D_L/189/189588.png'),
    (25, 'https://media.game.es/COVERV2/3D_L/V00/V006C9.png'),
    (26, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/HPAS2_AV2?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1654034079729');

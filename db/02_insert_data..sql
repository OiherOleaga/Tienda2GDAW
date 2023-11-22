INSERT INTO Comerciantes (Avatar, Nombre_empresa, Contrasenia, Correo, Telefono, Direccion)
VALUES
    ('https://yt3.googleusercontent.com/9WgVvMb5NkRQeC2Oeu0WL9t7phgInjMq1zju6TZsvT5nLaCO9lALk_-GnL7UjsB_bo4aEbMi4g=s900-c-k-c0x00ffffff-no-rj', 'GAME', '6ca5cab77e702c787b4c14b3d3bf26bad43da606be6eed04ab0b9720120ae081', 'game@game.es', '938706714', 'Zaramaga Kalea, 1, 01013 Gasteiz'),
    ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA8Ztdbr2gx2jV953PRCt2oxJFbSGr8g5Y-xLh3xWhag&s', 'GEMETIK Soluciones Tecnologicas', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', 'gemetik@gmail.com', '945009120', 'Adriano VI Kalea, 5, 01008 Gasteiz'),
    ('https://brandemia.org/contenido/subidas/2019/04/ikea-nuevo-logo.jpg', 'Ikea', '12345', 'ikea@gmail.com', '123456789', 'Zaramaga Kalea, 1, 01013 Gasteiz'),
    ('https://www.smaver.es/wp-content/uploads/2018/08/logo-mercadona-2.jpg', 'Mercadona', '12345', 'mercaadona@gmail.com', '873239127', 'Sierra de Andia Kalea, 10, 01010 Gasteiz'),
    ('https://2.bp.blogspot.com/-66tJSY-P-tk/Wd-fsBKy4dI/AAAAAAAAAnk/ZGUJF6V-ikwXGKTJ1vVHhpVkWbdedupPgCLcBGAs/w1200-h630-p-k-no-nu/decathlon.gif', 'Decathlon', '12345', 'Decathlon@gmail.com', '284328574', 'General Alava Kalea, 32, 01005 Gasteiz');


-- Inserciones para las columnas Titulo, Precio, Descripcion, e ID_Comerciante (ID_Comerciante limitado a 1 y 2)
INSERT INTO Productos (Titulo, Precio, Descripcion, ID_Comerciante)
VALUES
    ('Ordenador de torre', 219.99, 'Potente ordenador de torre disenado para gamers y profesionales. Equipado con procesador Intel Core i7, 16GB de RAM y tarjeta grafica NVIDIA GeForce RTX 3080.', 1),
    ('Portatil', 24.99, 'Portatil ligero y versatil para uso diario. Pantalla de 14 pulgadas, procesador AMD Ryzen 5, 8GB de RAM y almacenamiento SSD de 256GB.', 1),
    ('PlayStation 5', 399.99, 'La consola de nueva generacion de Sony con capacidad para juegos en 4K. Incluye un controlador DualSense con retroalimentacion haptica para una experiencia inmersiva.', 1),
    ('Nintendo Switch', 129.99, 'Consola hibrida que se puede usar como consola de sobremesa o portatil. Incluye dos controles Joy-Con y es compatible con una amplia variedad de juegos.', 1),
    ('PlayStation 4', 299.99, 'Consola de juegos popular con biblioteca extensa de titulos. Incluye un controlador inalambrico DualShock 4 y capacidad para transmitir contenido multimedia.', 1),
    ('Portatil MSI', 199.99, 'Portatil de alta gama para juegos con pantalla de 15.6 pulgadas, procesador Intel Core i5, 16GB de RAM y tarjeta grafica NVIDIA GTX 1660 Ti.', 1),
    ('Nintendo3DS', 12.99, 'Consola portatil Nintendo 3DS con pantalla 3D sin necesidad de gafas. Incluye dos pantallas, camara integrada y compatibilidad con juegos clasicos de Nintendo.', 1),
    ('MAC', 27.99, 'Sistema operativo macOS disenado para computadoras Mac. Incluye una interfaz intuitiva, seguridad avanzada y compatibilidad con software creativo.', 1),
    ('PlayStation 3', 34.99, 'Consola de juegos clasica con una biblioteca impresionante de titulos. Incluye un controlador inalambrico DualShock 3 y capacidad para reproduccion de Blu-ray.', 1),
    ('Videojuego PS5', 21.99, 'Ultimo titulo de aventuras para PlayStation 5. Graficos asombrosos, jugabilidad envolvente y una historia cautivadora que te mantendra entretenido durante horas.', 1),
    ('PlayStation 5', 399.99, 'La consola de nueva generacion de Sony con capacidad para juegos en 4K. Incluye un controlador DualSense con retroalimentacion haptica para una experiencia inmersiva.', 2),
    ('Tablet Android', 149.99, 'Tablet Android de 10 pulgadas con procesador rapido, 64GB de almacenamiento y una pantalla de alta resolucion. Perfecta para entretenimiento y productividad.', 2),
    ('Smartphone Samsung', 299.99, 'Potente smartphone Samsung con pantalla AMOLED de 6.5 pulgadas, camara triple de 48MP y bateria de larga duracion. Rendimiento excepcional para multitarea.', 2),
    ('Teclado Mecanico', 79.99, 'Teclado mecanico RGB con interruptores Cherry MX. Diseno duradero y retroiluminacion personalizable para una experiencia de escritura y juego optima.', 2),
    ('Auriculares Inalambricos', 49.99, 'Auriculares inalambricos con cancelacion de ruido para una experiencia auditiva inmersiva. Bateria de larga duracion y comodos para uso prolongado.', 2),
    ('Monitor Gaming', 329.99, 'Monitor gaming de 27 pulgadas con frecuencia de actualizacion de 144Hz y resolucion HD. Colores vibrantes y tiempo de respuesta rapido para una experiencia de juego suave.', 2),
    ('Camara DSLR', 799.99, 'Camara DSLR profesional con sensor de imagen de alta resolucion y capacidad para grabacion de video en 4K. Ideal para fotografos y cineastas.', 1),
    ('Impresora Multifuncion', 129.99, 'Impresora multifuncion con escaner y copiadora integrados. Conectividad inalambrica y facil integracion con dispositivos moviles para imprimir desde cualquier lugar.', 1),
    ('Silla de Oficina', 149.99, 'Silla de oficina ergonomica con soporte lumbar y ajuste de altura. Diseno elegante y comodo para largas horas de trabajo.', 1),
    ('Horno Electrico', 199.99, 'Horno electrico de conveccion con capacidad para asar, hornear y tostar. Control digital y multiples funciones para cocinar con precision.', 1),
    ('Licuadora', 49.99, 'Licuadora potente con motor de alto rendimiento. Perfecta para hacer batidos, jugos y sopas. Facil de limpiar y duradera.', 1),
    ('Reloj Inteligente', 129.99, 'Reloj inteligente con pantalla tactil a color, monitor de actividad y notificaciones inteligentes. Resistente al agua y compatible con dispositivos iOS y Android.', 2),
    ('Mochila Portatil', 39.99, 'Mochila portatil con compartimentos acolchados para laptops y tabletas. Diseno moderno y duradero para llevar tus dispositivos de manera segura.', 2),
    ('Altavoces Bluetooth', 59.99, 'Altavoces Bluetooth inalambricos con sonido de alta calidad. Bateria recargable de larga duracion y diseno compacto para llevar la musica a donde vayas.', 2),
    ('Bateria Externa', 29.99, 'Bateria externa de alta capacidad para cargar dispositivos moviles en movimiento. Diseno delgado y portatil para mantener tus dispositivos siempre encendidos.', 2),
    ('Botella de Agua Inteligente', 19.99, 'Botella de agua inteligente con recordatorio de hidratacion y seguimiento del consumo de agua. Ideal para aquellos que desean mantenerse hidratados', 2),
    ('Juego de Sabanas de Algodon', 39.99, 'Juego de sabanas suaves y transpirables de algodon. Incluye sabana bajera, sabana encimera y fundas de almohada. Disponible en varios colores.', 3),
    ('Cafetera de Goteo', 59.99, 'Cafetera programable de goteo para preparar cafe caliente y delicioso. Capacidad para 12 tazas y funcion de temporizador para disfrutar de cafe recien hecho.', 3),
    ('Set de Utensilios de Cocina', 29.99, 'Set completo de utensilios de cocina de acero inoxidable. Incluye cucharas, espatulas y otros utensilios esenciales para cocinar.', 3),
    ('Lampara de Mesa LED', 24.99, 'Lampara de mesa LED con ajuste de brillo y temperatura de color. Diseno moderno y eficiente energeticamente para iluminar tu espacio de trabajo o lectura.', 3),
    ('Juego de Toallas de Bano', 49.99, 'Juego de toallas de bano de alta calidad y absorbentes. Incluye toallas de bano, toallas de mano y toallas de cara. Disponible en varios colores.', 3),
    ('Aspiradora Robot', 199.99, 'Aspiradora robot inteligente con navegacion automatica y capacidad de succion potente. Programable para limpieza programada y control a traves de aplicacion movil.', 3),
    ('Mesa de Centro de Madera', 129.99, 'Mesa de centro elegante y duradera hecha de madera maciza. Diseno moderno con espacio de almacenamiento adicional para revistas y accesorios.', 3),
    ('Cortinas Opacas', 34.99, 'Cortinas opacas de alta calidad que bloquean la luz y proporcionan privacidad. Disponibles en diferentes tamanos y colores para adaptarse a cualquier estilo de decoracion.', 3),
    ('Set de Cuchillos de Cocina', 69.99, 'Set profesional de cuchillos de cocina con hojas de acero inoxidable afiladas. Incluye cuchillo de chef, cuchillo para pan y otros cuchillos esenciales.', 3),
    ('Alfombra de area', 79.99, 'Alfombra de area suave y duradera para anadir calidez y estilo a cualquier habitacion. Disponible en diferentes tamanos y patrones para complementar la decoracion.', 3),
    ('Organizador de Zapatos', 19.99, 'Organizador de zapatos colgante con varios compartimentos. Maximiza el espacio de almacenamiento en el armario y mantiene tus zapatos ordenados y accesibles.', 3),
    ('Mesa Plegable para Laptop', 49.99, 'Mesa plegable para laptop ajustable en altura. Perfecta para trabajar o estudiar desde la cama o el sofa. Ligera y facil de transportar.', 3),
    ('Aire Acondicionado Portatil', 299.99, 'Aire acondicionado portatil con control remoto y funcion de temporizador. Refresca eficientemente habitaciones pequenas y se mueve facilmente de una habitacion a otra.', 3),
    ('Espejo de Pared', 89.99, 'Espejo de pared decorativo con marco elegante. Anade estilo y amplitud visual a cualquier habitacion. Facil de instalar y resistente.', 3),
    ('Set de Ollas y Sartenes', 129.99, 'Set completo de ollas y sartenes antiadherentes de alta calidad. Adecuado para todas las fuentes de calor y facil de limpiar. Ideal para cocina diaria.', 3),
    ('Humidificador Ultrasonico', 39.99, 'Humidificador ultrasonico silencioso para mejorar la calidad del aire. Diseno moderno y capacidad ajustable para adaptarse a diferentes tamanos de habitacion.', 3),
    ('Funda de Almohada Decorativa', 14.99, 'Funda de almohada decorativa con patrones elegantes. Anade un toque de estilo a tu sofa o cama. Cierre de cremallera para facil lavado.', 3),
    ('Mesa de Noche con Cajon', 69.99, 'Mesa de noche compacta con cajon de almacenamiento. Ideal para guardar tus articulos esenciales junto a la cama. Diseno moderno y funcional.', 3),
    ('Cesta de Lavanderia', 19.99, 'Cesta de lavanderia plegable y portatil. Fabricada con materiales duraderos y asas para facilitar el transporte. Mantiene la ropa sucia organizada y fuera de la vista.', 3),
    ('Arroz Integral', 2.99, 'Arroz integral de grano largo, fuente rica en fibra y nutrientes esenciales para una dieta equilibrada.', 4),
    ('Pasta de Trigo Integral', 1.99, 'Pasta de trigo integral de alta calidad. Ideal para preparar comidas saludables y nutritivas.', 4),
    ('Aceite de Oliva Extra Virgen', 9.99, 'Aceite de oliva extra virgen de primera prensada. Aporta sabor y beneficios para la salud a tus platos.', 4),
    ('Quinoa Organica', 4.99, 'Quinoa organica de alta calidad, rica en proteinas y nutrientes esenciales. Perfecta para ensaladas y platos principales.', 4),
    ('Miel Pura de Abeja', 7.99, 'Miel pura de abeja, endulzante natural con propiedades antioxidantes y beneficios para la salud.', 4),
    ('Lentejas Secas', 3.49, 'Lentejas secas, fuente de proteinas y fibra. Ideales para sopas, guisos y platos vegetarianos.', 4),
    ('Nueces Naturales', 8.99, 'Nueces naturales sin cascara, ricas en grasas saludables y antioxidantes. Snack nutritivo y delicioso.', 4),
    ('Salsa de Tomate Organica', 2.79, 'Salsa de tomate organica, elaborada con tomates frescos y sin aditivos artificiales. Perfecta para pasta y pizzas.', 4),
    ('Cereal Integral', 3.29, 'Cereal integral enriquecido con vitaminas y minerales. Desayuno saludable y energetico para empezar el dia.', 4),
    ('Sal Marina', 1.49, 'Sal marina natural sin refinar. Aporta minerales esenciales y realza el sabor de tus comidas.', 4),
    ('Vinagre Balsamico', 5.99, 'Vinagre balsamico de alta calidad, perfecto para aderezar ensaladas y platos gourmet.', 4),
    ('Galletas Integrales', 3.79, 'Galletas integrales con granos enteros y bajo contenido de azúcar. Snack saludable para cualquier momento del dia.', 4),
    ('Sopa Instantanea de Pollo', 1.99, 'Sopa instantanea de pollo, lista en minutos. Deliciosa y reconfortante para dias ocupados.', 4),
    ('Almendras Naturales', 6.49, 'Almendras naturales, ricas en grasas saludables y proteinas. Snack nutritivo para saciar el hambre.', 4),
    ('Pure de Tomate', 2.29, 'Pure de tomate concentrado, versatil para diversas recetas de salsas y guisos.', 4),
    ('Yogur Griego Natural', 3.99, 'Yogur griego natural, rico en proteinas y probioticos. Ideal para desayunos y meriendas saludables.', 4),
    ('Harina de Avena', 4.49, 'Harina de avena integral, perfecta para preparar panes, galletas y batidos nutritivos.', 4),
    ('Aceitunas Verdes', 2.89, 'Aceitunas verdes sin hueso, ideales para aperitivos y ensaladas. Aportan sabor mediterraneo a tus platos.', 4),
    ('Mantequilla de Almendra', 7.99, 'Mantequilla de almendra natural, sin aditivos ni azúcares anadidos. Fuente de grasas saludables y proteinas.', 4),
    ('Jugo de Naranja Natural', 3.49, 'Jugo de naranja fresco y natural, rico en vitamina C. Refrescante y nutritivo para cualquier momento del dia.', 4),
    ('Huevos Organicos', 4.99, 'Huevos organicos de gallinas criadas en libertad. Fuente de proteinas y nutrientes esenciales.', 4),
    ('Salsa de Soja', 1.79, 'Salsa de soja natural, perfecta para dar sabor a platos asiaticos y marinadas.', 4),
    ('Pure de Manzana Sin Azúcar', 2.59, 'Pure de manzana sin azúcar anadido, saludable y versatil para acompanar desayunos y postres.', 4),
    ('Pistachos Tostados', 5.49, 'Pistachos tostados y salados, snack delicioso y nutritivo. Aporta energia y grasas saludables.', 4),
    ('Cafe Organico enGrano', 8.99, 'Cafe organico en grano, tostado y molido fresco para una taza de cafe aromatico y sostenible.', 4),
    ('Sopa de Lentejas en Lata', 2.19, 'Sopa de lentejas enlatada, lista para calentar y disfrutar. Nutritiva y reconfortante en dias ocupados.', 4),
    ('Pure de Aguacate', 3.99, 'Pure de aguacate natural, sin conservantes ni aditivos. Perfecto para untar en pan, tacos o como complemento en ensaladas.', 4),
    ('Chocolate Negro 70%', 4.79, 'Tableta de chocolate negro con un 70% de cacao. Delicioso y lleno de antioxidantes. Ideal para satisfacer los antojos de chocolate.', 4),
    ('Muesli de Frutas y Frutos Secos', 3.99, 'Muesli de frutas y frutos secos, mezcla nutritiva para un desayuno lleno de energia. Sin azúcares anadidos.', 4),
    ('Sopa de Tomate en Lata', 1.89, 'Sopa de tomate enlatada, lista para calentar y disfrutar. Sabor casero sin complicaciones.', 4),
    ('Sesamo Tostado', 2.29, 'Sesamo tostado, anade un toque de sabor y textura a tus platos. Ideal para ensaladas y platos asiaticos.', 4),
    ('Mermelada de Fresa Sin Azúcar', 3.49, 'Mermelada de fresa sin azúcar anadido, perfecta para untar en pan o acompanar yogur. Endulza tus mananas de manera saludable.', 4),
    ('Granola Organica', 4.99, 'Granola organica con frutas y frutos secos. Anade textura y sabor a tus desayunos y meriendas.', 4),
    ('Te Verde Organico', 2.99, 'Te verde organico, lleno de antioxidantes y beneficios para la salud. Una opcion saludable y reconfortante para tus momentos de relajacion.', 4),
    ('Masa para Pizza Integral', 3.79, 'Masa para pizza integral, lista para usar. Anade un toque saludable a tus pizzas caseras.', 4),
    ('Salsa Pesto', 4.29, 'Salsa pesto fresca y deliciosa, perfecta para pasta, ensaladas y como dip. Aporta sabor mediterraneo a tus platos.', 4),
    ('Canela Molida', 1.39, 'Canela molida de alta calidad, ideal para dar sabor a postres, batidos y bebidas calientes.', 4),
    ('Agua Mineral Natural', 0.99, 'Agua mineral natural creada por el legendario CR7, refrescante y sin aditivos. La opcion perfecta para mantenerte hidratado.', 4),
    ('Balon de Fútbol', 14.99, 'Balon de fútbol de alta calidad. Diseno duradero y apto para partidos recreativos y entrenamientos.', 5),
    ('Raqueta de Tenis', 29.99, 'Raqueta de tenis profesional con tecnologia avanzada. Ideal para jugadores intermedios y avanzados.', 5),
    ('Bicicleta de Montana', 299.99, 'Bicicleta de montana resistente con cuadro de aluminio. Perfecta para aventuras off-road y senderismo.', 5),
    ('Pesa Ajustable', 49.99, 'Set de pesas ajustables para entrenamiento de fuerza. Variedad de pesos en un diseno compacto y facil de usar.', 5),
    ('Cinta de Correr Electrica', 699.99, 'Cinta de correr electrica con motor potente. Programas de entrenamiento personalizables y monitor de ritmo cardiaco.', 5),
    ('Patines en Linea', 79.99, 'Patines en linea ajustables con ruedas de alto rendimiento. Ideales para patinaje recreativo y paseos en el parque.', 5),
    ('Pelota de Baloncesto', 19.99, 'Pelota de baloncesto oficial para juegos y entrenamientos. Agarre superior y durabilidad para un rendimiento optimo.', 5),
    ('Guantes de Levantamiento de Pesas', 19.99, 'Guantes acolchados para levantamiento de pesas. Proporcionan agarre y proteccion durante tus sesiones de entrenamiento.', 5),
    ('Gafas de Natacion', 12.99, 'Gafas de natacion antiempanantes con ajuste comodo. Disenadas para proporcionar claridad y vision en el agua.', 5),
    ('Tabla de Surf', 249.99, 'Tabla de surf de alta calidad para surfistas de todos los niveles. Diseno resistente y estable para un rendimiento optimo en el agua.', 5),
    ('Raqueta de Badminton', 24.99, 'Raqueta de badminton ligera y resistente. Apta para jugadores principiantes y intermedios.', 5),
    ('Maquina de Entrenamiento Abdominal', 89.99, 'Maquina de entrenamiento abdominal con resistencia ajustable. Ideal para fortalecer y tonificar los músculos abdominales.', 5),
    ('Casco de Ciclismo', 34.99, 'Casco de ciclismo con diseno aerodinamico y sistema de ventilacion. Brinda proteccion y comodidad durante tus paseos en bicicleta.', 5),
    ('Pelota Medicinal', 14.99, 'Pelota medicinal para ejercicios de fuerza y ​​equilibrio. Ideal para entrenamiento funcional y rehabilitacion.', 5),
    ('Maquina de Remo', 299.99, 'Maquina de remo con resistencia ajustable. Proporciona un entrenamiento cardiovascular y de fuerza de cuerpo completo.', 5),
    ('Pantalones de Yoga', 29.99, 'Pantalones de yoga transpirables y elasticos. Ideales para practicas de yoga y otras actividades deportivas.', 5),
    ('Saco de Boxeo', 79.99, 'Saco de boxeo resistente con cadenas para colgar. Perfecto para entrenamiento de boxeo y ejercicios de acondicionamiento fisico.', 5),
    ('Gorra de Running', 14.99, 'Gorra de running ligera y transpirable. Protege del sol y absorbe la humedad durante tus carreras al aire libre.', 5),
    ('Cuerda para Saltar', 9.99, 'Cuerda para saltar ajustable para entrenamientos cardiovasculares. Ligera y portatil para llevar a cualquier lugar.', 5),
    ('Mancuernas', 39.99, 'Set de mancuernas de peso variable. Perfectas para ejercicios de fuerza y tonificacion en casa o en el gimnasio.', 5),
    ('Rodilleras de Volleyball', 19.99, 'Rodilleras acolchadas para jugadores de voley. Brindan proteccion y soporte durante los juegos y entrenamientos intensos.', 5),
    ('Camara de Accion', 129.99, 'Camara de accion resistente al agua para grabar tus aventuras deportivas. Captura videos y fotos de alta calidad durante tus actividades al aire libre.', 5),
    ('Zapatillas de Trail Running', 69.99, 'Zapatillas de trail running con suela antideslizante. Disenadas para correr en terrenos irregulares y senderos.', 5),
    ('Red de Tenis', 49.99, 'Red de tenis portatil para juegos recreativos. Facil de montar y desmontar para llevar a cualquier lugar.', 5),
    ('Cinta de Yoga', 14.99, 'Cinta de yoga resistente y antideslizante. Ideal para estiramientos y practicas de yoga en casa o en el estudio.', 5),
    ('Tablero de Equilibrio', 19.99, 'Tablero de equilibrio para mejorar la estabilidad y fortalecer los músculos centrales. Ideal para entrenamientos en casa o en el gimnasio.', 5),
    ('Cuerda de Escalada', 89.99, 'Cuerda de escalada resistente y duradera. Apta para escaladores principiantes y avanzados.', 5),
    ('Sudadera con Capucha para Running', 34.99, 'Sudadera con capucha transpirable y ligera. Disenada para mantenerte abrigado durante tus carreras al aire libre.', 5),
    ('Pelota de Yoga', 16.99, 'Pelota de yoga duradera para fortalecimiento y estiramientos. Ideal para mejorar la postura y la flexibilidad.', 5),
    ('Linterna Frontal LED para Running', 24.99, 'Linterna frontal LED recargable para correr de noche. Proporciona visibilidad y seguridad durante tus carreras nocturnas.', 5);


INSERT INTO Clientes (Avatar, Nombre, username, Apellidos, Contrasenia, Correo, Telefono, Direccion) 
VALUES
('https://i.blogs.es/1039bf/langostinos/450_1000.jpg', 'Oiher', 'oiherPerron', 'Oleaga Guerrero', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'oiheroleaga@email.com', '657659280', 'calle guetaria, vitoria-gasteiz'),
('https://i.pinimg.com/originals/f5/b3/b7/f5b3b7a64c253f882bfdd4337c7721ac.jpg', 'David', 'DavidMamalon', 'Moreno Alonso', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'davidcaca@gmail.com', '9876543210', 'coronela ibaibarriaga, vitoria-gasteiz'),
('https://images3.memedroid.com/images/UPLOADED578/5fbfcb10c4a8c.jpeg', 'Anartz', 'a', 'Pagaldai', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', 'pedro@email.com', '5555555555', 'Albacete');

INSERT INTO Categorias (Nombre) VALUES
    ('Tecnologia'),
    ('Hogar'),
    ('Alimentacion'),
    ('Deportes');


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
    (1, 26),
    (2, 27),
    (2, 28),
    (2, 29),
    (2, 30),
    (2, 31),
    (2, 32),
    (1, 32),
    (2, 33),
    (2, 34),
    (2, 35),
    (2, 36),
    (2, 37),
    (2, 38),
    (2, 39),
    (2, 40),
    (2, 41),
    (2, 42),
    (2, 43),
    (2, 44),
    (2, 45),
    (2, 46),
    (3, 47),
    (3, 48),
    (3, 49),
    (3, 50),
    (3, 51),
    (3, 52),
    (3, 53),
    (3, 54),
    (3, 55),
    (3, 56),
    (3, 57),
    (3, 58),
    (3, 59),
    (3, 60),
    (3, 61),
    (3, 62),
    (3, 63),
    (3, 64),
    (3, 65),
    (3, 66),
    (3, 67),
    (3, 68),
    (3, 69),
    (3, 70),
    (3, 71),
    (3, 72),
    (3, 73),
    (3, 74),
    (3, 75),
    (3, 76),
    (3, 77),
    (3, 78),
    (3, 79),
    (3, 80),
    (3, 81),
    (3, 82),
    (3, 83),
    (4, 84),
    (4, 85),
    (4, 86),
    (4, 87),
    (4, 88),
    (4, 89),
    (4, 90),
    (4, 91),
    (4, 92),
    (4, 93),
    (4, 94),
    (4, 95),
    (4, 96),
    (4, 97),
    (4, 98),
    (4, 99),
    (4, 100),
    (4, 101),
    (4, 102),
    (4, 103),
    (4, 104),
    (4, 105),
    (4, 106),
    (4, 107),
    (4, 108),
    (4, 109),
    (4, 110),
    (4, 111),
    (4, 112),
    (4, 113);
    


-- Insertar datos en la tabla Fotos_producto
INSERT INTO Fotos_producto (ID_Producto, URL) VALUES
    (1, 'https://media.game.es/COVERV2/3D_L/186/186150.png'),
    (1, 'https://media.game.es/COVERV2/3D_L/186/186150.png'),
    (1, 'https://media.game.es/COVERV2/3D_L/186/186150.png'),
    (1, 'https://media.game.es/COVERV2/3D_L/186/186150.png'),
    (1, 'https://media.game.es/COVERV2/3D_L/186/186150.png'),
    (2, 'https://m.media-amazon.com/images/I/31KrKAKoLrL._SL500_.jpg'),
    (2, 'https://m.media-amazon.com/images/I/31KrKAKoLrL._SL500_.jpg'),
    (2, 'https://m.media-amazon.com/images/I/31KrKAKoLrL._SL500_.jpg'),
    (2, 'https://m.media-amazon.com/images/I/31KrKAKoLrL._SL500_.jpg'),
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
    (26, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/HPAS2_AV2?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1654034079729'),
    (27, 'https://ciberdescans.com/42658-large_default/sabanas-hosteleria-algodon-200x200.jpg'),
    (28, 'https://cdn.palbincdn.com/users/37662/images/81Y-DTZ7ggL._AC_SL1500_-1607677704.jpg'),
    (29, 'https://m.media-amazon.com/images/I/51YQlq8Iy+L._AC_UF894,1000_QL80_.jpg'),
    (30, 'https://www.manicura24.es/biblioteca/images_manicura/8707-Lampara-de-mesa-LED-02.jpg'),
    (31, 'https://cdn.shopworld.cloud/media/3/Images/Products/3233_0163_1200_1200.jpg'),
    (32, 'https://static.carrefour.es/hd_510x_/crs/cdn_static/catalog/hd/295663_00_1.jpg'),
    (33, 'https://www.ikea.com/es/es/images/products/hemnes-mesa-centro-tinte-blanco-marron-claro__0735559_pe740009_s5.jpg?f=xxs'),
    (34, 'https://cdn.manomano.com/images/images_products/21449342/P/72407682_1.jpg'),
    (35, 'https://www.tenartis.com/1859-large_default/417-set-5-cuchillos-cocina-master.jpg'),
    (36, 'https://storage.googleapis.com/catalog-pictures-carrefour-es/catalog/pictures/hd_510x_/8720287070801_1.jpg'),
    (37, 'https://m.media-amazon.com/images/I/71ZZbW-YC8L._AC_UF894,1000_QL80_.jpg'),
    (38, 'https://www.tiendasmgi.es/53013/mesa-plegable-para-portatil-60x42x28.jpg'),
    (39, 'https://m.media-amazon.com/images/I/31wFJqXk3CL._AC_UF894,1000_QL80_.jpg'),
    (40, 'https://m.media-amazon.com/images/I/61jsxXHtNFL._AC_UL640_FMwebp_QL65_.jpg'),
    (41, 'https://m.media-amazon.com/images/I/61VQfbw++nL._AC_UF894,1000_QL80_.jpg'),
    (42, 'https://m.media-amazon.com/images/I/71JEMpVmTkL._AC_UL640_FMwebp_QL65_.jpg'),
    (43, 'https://m.media-amazon.com/images/I/31w-MEfl42L._AC_UL640_FMwebp_QL65_.jpg'),
    (44, 'https://m.media-amazon.com/images/I/81VWSvS2v2L._AC_UL640_FMwebp_QL65_.jpg'),
    (45, 'https://m.media-amazon.com/images/I/71eFXb0-c5L._AC_UL640_FMwebp_QL65_.jpg'),
    (46, 'https://m.media-amazon.com/images/I/71Y7NyRHEiL._AC_UL640_FMwebp_QL65_.jpg'),
    (47, 'https://m.media-amazon.com/images/I/71RXwetYyIS._AC_UL640_FMwebp_QL65_.jpg'),
    (48, 'https://m.media-amazon.com/images/I/510BWPxuy3L.__AC_SX300_SY300_QL70_ML2_.jpg'),
    (49, 'https://m.media-amazon.com/images/I/61+zUXEl0OS._AC_UL640_FMwebp_QL65_.jpg'),
    (50, 'https://m.media-amazon.com/images/I/71H2OdbP2ZL._AC_UL640_FMwebp_QL65_.jpg'),
    (51, 'https://m.media-amazon.com/images/I/81g6zj03ThL._AC_UL640_FMwebp_QL65_.jpg'),
    (52, 'https://m.media-amazon.com/images/I/81kSqBDMQ0L._AC_UL640_FMwebp_QL65_.jpg'),
    (53, 'https://m.media-amazon.com/images/I/61Txm675A6L._AC_UL640_FMwebp_QL65_.jpg'),
    (54, 'https://m.media-amazon.com/images/I/91DZy-mO2gL._AC_UL640_FMwebp_QL65_.jpg'),
    (55, 'https://m.media-amazon.com/images/I/91zhFiTJ53L._AC_UL640_FMwebp_QL65_.jpg'),
    (56, 'https://m.media-amazon.com/images/I/61mFNsX4DGL._AC_UL640_FMwebp_QL65_.jpg'),
    (57, 'https://m.media-amazon.com/images/I/81OwG02eGGL._AC_UL640_FMwebp_QL65_.jpg'),
    (58, 'https://m.media-amazon.com/images/I/81fNNjcHdOL._AC_UL640_FMwebp_QL65_.jpg'),
    (59, 'https://m.media-amazon.com/images/I/8174m2ASQ-L._AC_UL640_FMwebp_QL65_.jpg'),
    (60, 'https://m.media-amazon.com/images/I/91u51mCav6L._AC_UL640_FMwebp_QL65_.jpg'),
    (61, 'https://m.media-amazon.com/images/I/41He6dk1QvL._AC_UL640_FMwebp_QL65_.jpg'),
    (62, 'https://m.media-amazon.com/images/I/71h1cT11sAL._AC_UL640_FMwebp_QL65_.jpg'),
    (63, 'https://m.media-amazon.com/images/I/71gMCTk0QmL._AC_UL640_FMwebp_QL65_.jpg'),
    (64, 'https://m.media-amazon.com/images/I/81w37N4wYqL._AC_UL640_FMwebp_QL65_.jpg'),
    (65, 'https://m.media-amazon.com/images/I/813WdV0JGiL._AC_UL640_FMwebp_QL65_.jpg'),
    (66, 'https://feriaadomicilio.cl/wp-content/uploads/2019/12/HUEVOS-T.jpg'),
    (67, 'https://m.media-amazon.com/images/I/713v88SLRbL._AC_UL640_FMwebp_QL65_.jpg'),
    (68, 'https://m.media-amazon.com/images/I/51CGlwAU6oL._AC_UL640_FMwebp_QL65_.jpg'),
    (69, 'https://m.media-amazon.com/images/I/51FY177YerL._AC_UL640_FMwebp_QL65_.jpg'),
    (70, 'https://m.media-amazon.com/images/I/71kV+YAapSL._AC_SY300_SX300_.jpg'),
    (71, 'https://m.media-amazon.com/images/I/81rI9-eSuFL._AC_UL640_FMwebp_QL65_.jpg'),
    (72, 'https://www.justspices.es/media/recipe/Crema-de-aguacate.jpg'),
    (73, 'https://m.media-amazon.com/images/I/8130mYQfYOL._AC_UL640_FMwebp_QL65_.jpg'),
    (74, 'https://m.media-amazon.com/images/I/81ku08FxvjL._AC_UL640_FMwebp_QL65_.jpg'),
    (75, 'https://m.media-amazon.com/images/I/71ek9zBa7sL._AC_UL640_FMwebp_QL65_.jpg'),
    (76, 'https://m.media-amazon.com/images/I/81IliBjVg4L._AC_UL640_FMwebp_QL65_.jpg'),
    (77, 'https://m.media-amazon.com/images/I/710PTGIgvTL._AC_UL640_FMwebp_QL65_.jpg'),
    (78, 'https://m.media-amazon.com/images/I/71O7CS9lO+L._AC_SX300_SY300_.jpg'),
    (79, 'https://m.media-amazon.com/images/I/81H1wionsjL._AC_UL640_FMwebp_QL65_.jpg'),
    (80, 'https://m.media-amazon.com/images/I/61fVoUht9jL._AC_UL640_FMwebp_QL65_.jpg'),
    (81, 'https://m.media-amazon.com/images/I/71Ex41yQcJL._AC_UL640_FMwebp_QL65_.jpg'),
    (82, 'https://m.media-amazon.com/images/I/81uBXnzUVAL._AC_UL640_FMwebp_QL65_.jpg'),
    (83, 'https://m.media-amazon.com/images/I/71GJGRhMC5L._AC_UL640_FMwebp_QL65_.jpg'),
    (83, 'https://s1.eestatic.com/2023/06/23/actualidad/773683155_234195060_1706x960.jpg'),
    (84, 'https://m.media-amazon.com/images/I/71ABuN4R4ZL._AC_UL640_FMwebp_QL65_.jpg'),
    (85, 'https://m.media-amazon.com/images/I/61j1ktuChvL._AC_UL640_FMwebp_QL65_.jpg'),
    (86, 'https://m.media-amazon.com/images/I/71xPE15ZhCL._AC_UL640_FMwebp_QL65_.jpg'),
    (87, 'https://m.media-amazon.com/images/I/51NfhPnb2oS._AC_UL640_FMwebp_QL65_.jpg'),
    (88, 'https://m.media-amazon.com/images/I/61L7NfrFt4L._AC_UL640_FMwebp_QL65_.jpg'),
    (89, 'https://m.media-amazon.com/images/I/816ejEelCiL._AC_UL640_FMwebp_QL65_.jpg'),
    (90, 'https://m.media-amazon.com/images/I/61bpOgLAEJL._AC_UL640_FMwebp_QL65_.jpg'),
    (91, 'https://m.media-amazon.com/images/I/811ciSxeqgL._AC_UL640_FMwebp_QL65_.jpg'),
    (92, 'https://m.media-amazon.com/images/I/71kgctPOyYL._AC_UL640_FMwebp_QL65_.jpg'),
    (93, 'https://m.media-amazon.com/images/I/51lmOkRJO2L._AC_UL640_FMwebp_QL65_.jpg'),
    (94, 'https://m.media-amazon.com/images/I/61ibumPwQcL._AC_UL640_FMwebp_QL65_.jpg'),
    (95, 'https://m.media-amazon.com/images/I/71XAKE2PrSL._AC_UL640_FMwebp_QL65_.jpg'),
    (96, 'https://m.media-amazon.com/images/I/71RyL9rBL9L._AC_UL640_FMwebp_QL65_.jpg'),
    (96, 'https://www.iberobike.com/wp-content/uploads/2023/03/El-meme-de-Mikel-Landa-y-el-mono-en-la-Volta-a-Cataluna-compartido-por-Thomas-de-Gendt-landismo.jpg'),
    (97, 'https://m.media-amazon.com/images/I/71e-dZE-pWL._AC_UL640_FMwebp_QL65_.jpg'),
    (98, 'https://m.media-amazon.com/images/I/41ahrVS6iPL._AC_UL640_FMwebp_QL65_.jpg'),
    (99, 'https://m.media-amazon.com/images/I/613-lFc8OgL._AC_UL640_FMwebp_QL65_.jpg'),
    (100, 'https://m.media-amazon.com/images/I/51Udq7HZfIL._AC_UL640_FMwebp_QL65_.jpg'),
    (101, 'https://m.media-amazon.com/images/I/81rI9-eSuFL._AC_UL640_FMwebp_QL65_.jpg'),
    (102, 'https://m.media-amazon.com/images/I/81gimbwYLiL._AC_UL640_FMwebp_QL65_.jpg'),
    (103, 'https://m.media-amazon.com/images/I/81VpRSm3dwL._AC_UL640_FMwebp_QL65_.jpg'),
    (104, 'https://m.media-amazon.com/images/I/81H8y2IjSKL._AC_UL640_FMwebp_QL65_.jpg'),
    (105, 'https://m.media-amazon.com/images/I/81SFg8UqMrL._AC_UL640_FMwebp_QL65_.jpg'),
    (106, 'https://m.media-amazon.com/images/I/5179i1x9AGL._AC_UL640_FMwebp_QL65_.jpg'),
    (107, 'https://m.media-amazon.com/images/I/91QurZsTKTL._AC_UL640_FMwebp_QL65_.jpg'),
    (108, 'https://m.media-amazon.com/images/I/61Vefamcq-L._AC_UL640_FMwebp_QL65_.jpg'),
    (109, 'https://m.media-amazon.com/images/I/71-JIbnKRnL._AC_UL640_FMwebp_QL65_.jpg'),
    (110, 'https://m.media-amazon.com/images/I/71mIj2SQKLL._AC_UL640_FMwebp_QL65_.jpg'),
    (111, 'https://m.media-amazon.com/images/I/61n9ddi2XyL._AC_UL640_FMwebp_QL65_.jpg'),
    (112, 'https://m.media-amazon.com/images/I/810AFqNI8rL._AC_UL640_FMwebp_QL65_.jpg'),
    (113, 'https://m.media-amazon.com/images/I/71yUEjyMaoL._AC_UL640_FMwebp_QL65_.jpg');

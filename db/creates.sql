CREATE TABLE Clientes (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Avatar VARCHAR(255),
    Nombre VARCHAR(255),
    username VARCHAR(255) unique,
    Apellidos VARCHAR(255),
    Contrasenia VARCHAR(255),
    Correo VARCHAR(255),
    Telefono VARCHAR(15),
    Direccion TEXT
);

CREATE TABLE Comerciantes (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Avatar VARCHAR(255),
    Nombre_empresa VARCHAR(255),
    username VARCHAR(255) unique,
    Contrasenia VARCHAR(255),
    Correo VARCHAR(255),
    Telefono VARCHAR(15),
    Direccion TEXT
);

CREATE TABLE Productos (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Titulo VARCHAR(255),
    Precio DECIMAL(10, 2),
    Descripcion TEXT,
    Foto VARCHAR(255),
    ID_Comerciante INT,
    FOREIGN KEY (ID_Comerciante) REFERENCES Comerciante(ID)
);

CREATE TABLE Categorias (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255)
);

CREATE TABLE Categorias_Productos (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_Categorias INT,
    ID_Producto INT,
    FOREIGN KEY (ID_Categorias) REFERENCES Categorias(ID),
    FOREIGN KEY (ID_Producto) REFERENCES Productos(ID)
);

CREATE TABLE Comprar (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Fecha_Publicacion DATE,
    ID_Cliente INT,
    ID_Producto INT,
    FOREIGN KEY (ID_Cliente) REFERENCES Clientes(ID),
    FOREIGN KEY (ID_Producto) REFERENCES Productos(ID)
);

CREATE TABLE Likes (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_Cliente INT,
    ID_Producto INT,
    FOREIGN KEY (ID_Cliente) REFERENCES Clientes(ID),
    FOREIGN KEY (ID_Producto) REFERENCES Productos(ID)
);

CREATE TABLE Resenna_producto (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_Cliente INT,
    ID_Producto INT,
    puntuacion INT,
    comentario TEXT,
    fecha DATE,
    FOREIGN KEY (ID_Cliente) REFERENCES Clientes(ID),
    FOREIGN KEY (ID_Producto) REFERENCES Productos(ID)
);

CREATE TABLE Resenna_comerciante (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_Cliente INT,
    ID_Comerciante INT,
    puntuacion INT,
    comentario TEXT,
    fecha DATE,
    FOREIGN KEY (ID_Cliente) REFERENCES Clientes(ID),
    FOREIGN KEY (ID_Comerciante) REFERENCES Comerciante(ID)
);
-- Insertar 10 comerciantes de ejemplo
INSERT INTO Comerciante (Avatar, Nombre_empresa, Contrasenia, Correo, Telefono, Direccion)
VALUES
    ('avatar1.jpg', 'Empresa 1', 'contrasenia1', 'correo1@example.com', '123-456-7890', 'Dirección 1'),
    ('avatar2.jpg', 'Empresa 2', 'contrasenia2', 'correo2@example.com', '234-567-8901', 'Dirección 2'),
    ('avatar3.jpg', 'Empresa 3', 'contrasenia3', 'correo3@example.com', '345-678-9012', 'Dirección 3'),
    ('avatar4.jpg', 'Empresa 4', 'contrasenia4', 'correo4@example.com', '456-789-0123', 'Dirección 4'),
    ('avatar5.jpg', 'Empresa 5', 'contrasenia5', 'correo5@example.com', '567-890-1234', 'Dirección 5'),
    ('avatar6.jpg', 'Empresa 6', 'contrasenia6', 'correo6@example.com', '678-901-2345', 'Dirección 6'),
    ('avatar7.jpg', 'Empresa 7', 'contrasenia7', 'correo7@example.com', '789-012-3456', 'Dirección 7'),
    ('avatar8.jpg', 'Empresa 8', 'contrasenia8', 'correo8@example.com', '890-123-4567', 'Dirección 8'),
    ('avatar9.jpg', 'Empresa 9', 'contrasenia9', 'correo9@example.com', '901-234-5678', 'Dirección 9'),
    ('avatar10.jpg', 'Empresa 10', 'contrasenia10', 'correo10@example.com', '012-345-6789', 'Dirección 10');


-- Insertar 10 productos de ejemplo
INSERT INTO Productos (Titulo, Precio, Descripcion, Foto, ID_Comerciante)
VALUES
    ('Producto 1', 19.99, 'Descripción del Producto 1', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 1),
    ('Producto 2', 24.99, 'Descripción del Producto 2', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 2),
    ('Producto 3', 14.99, 'Descripción del Producto 3', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 1),
    ('Producto 4', 29.99, 'Descripción del Producto 4', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 3),
    ('Producto 5', 39.99, 'Descripción del Producto 5', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 2),
    ('Producto 6', 19.99, 'Descripción del Producto 6', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 3),
    ('Producto 7', 12.99, 'Descripción del Producto 7', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 1),
    ('Producto 8', 27.99, 'Descripción del Producto 8', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 2),
    ('Producto 9', 34.99, 'Descripción del Producto 9', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 1),
    ('Producto 10', 21.99, 'Descripción del Producto 10', 'https://pbs.twimg.com/media/EjqnvlAXYAAi5DF.jpg', 3);

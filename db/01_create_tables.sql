CREATE TABLE Clientes (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Avatar VARCHAR(255),
    Nombre VARCHAR(255),
    username VARCHAR(255) unique,
    Apellidos VARCHAR(255),
    Contrasenia VARCHAR(255),
    Correo VARCHAR(255) unique,
    Telefono VARCHAR(15) unique,
    Direccion TEXT
);

CREATE TABLE Comerciantes (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Avatar VARCHAR(255),
    Nombre_empresa VARCHAR(255) unique,
    Contrasenia VARCHAR(255),
    Correo VARCHAR(255) unique,
    Telefono VARCHAR(15) unique,
    Direccion TEXT
);

CREATE TABLE Productos (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Titulo VARCHAR(255),
    Precio DECIMAL(10, 2),
    Descripcion TEXT,
    Foto VARCHAR(255),
    Fecha DATE,
    ID_Comerciante INT,
    FOREIGN KEY (ID_Comerciante) REFERENCES Comerciantes(ID)
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
    Fecha DATE,
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
    FOREIGN KEY (ID_Comerciante) REFERENCES Comerciantes(ID)
);

CREATE TABLE Fotos_producto (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_Producto INT,
    URL VARCHAR(255),
    FOREIGN KEY (ID_Producto) REFERENCES Productos(ID)
);

CREATE TABLE Direcciones (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_Comerciante INT,
    Direccion VARCHAR(255),
    FOREIGN KEY (ID_Comerciante) REFERENCES Comerciantes(ID)
);

CREATE TABLE TarjetaCredito (
    Numero VARCHAR(19), 
    ID_Cliente INT,
    FechaExpiracion DATE,
    CVV INT,
    PRIMARY KEY (Numero, ID_Cliente),
    FOREIGN KEY (ID_Cliente) REFERENCES Clientes(ID) ON DELETE CASCADE
);
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    avatar VARCHAR(255),
    nombre VARCHAR(255),
    username VARCHAR(255) UNIQUE,
    apellidos VARCHAR(255),
    contrasenia VARCHAR(255),
    correo VARCHAR(255),
    telefono VARCHAR(15),
    direccion VARCHAR(255)
);

CREATE TABLE comerciantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    avatar VARCHAR(255),
    nombre_empresa VARCHAR(255) UNIQUE,
    contrasenia VARCHAR(255),
    correo VARCHAR(255),
    telefono VARCHAR(15),
    direccion VARCHAR(255)
);

CREATE UNIQUE INDEX idx_unique_username_nombre_empresa ON (clientes.username, comerciantes.nombre_empresa);

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    precio DECIMAL(10, 2),
    descripcion TEXT,
    foto VARCHAR(255),
    fecha_publicacion DATE,
    id_comerciante INT,
    FOREIGN KEY (id_comerciante) REFERENCES comerciantes(id)
);

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255)
);

CREATE TABLE categorias_productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_categorias INT,
    id_producto INT,
    FOREIGN KEY (id_categorias) REFERENCES categorias(id),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE TABLE comprar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE,
    id_cliente INT,
    id_producto INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE TABLE likes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_producto INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE TABLE resenna_producto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_producto INT,
    puntuacion INT,
    comentario TEXT,
    fecha DATE,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE TABLE resenna_comerciante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_comerciante INT,
    puntuacion INT,
    comentario TEXT,
    fecha DATE,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_comerciante) REFERENCES comerciantes(id)
);

CREATE TABLE fotos_producto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT,
    url VARCHAR(255),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE TABLE direcciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    direccion VARCHAR(255),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id)
);


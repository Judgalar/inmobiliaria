DROP DATABASE IF EXISTS Inmobiliaria;
 
CREATE DATABASE Inmobiliaria CHARACTER SET utf8 COLLATE utf8_general_ci;

USE Inmobiliaria; 

create table USUARIOS (
    IdUsuario int AUTO_INCREMENT primary key not null,
    Correo varchar(80) unique not null,
    Clave varchar(45) not null,
    Telefono varchar(9) not null,
    Administrador BOOLEAN DEFAULT 0
    
);

create table PRODUCTOS (
    IdProducto int AUTO_INCREMENT primary key not null,
    Propietario int,
    Categoria varchar(20) not null,
    Nombre varchar(45) not null,
    Pais varchar(20) not null,
    Ciudad varchar(30) not null,
    CP varchar(9) not null,
    Direccion varchar(90) not null,
    Descripcion varchar(90) not null,
    Precio varchar(20) not null,
    TipoImagen varchar(20) NOT NULL,
    Imagen varchar(50) NOT NULL,
    FOREIGN KEY (Propietario) REFERENCES USUARIOS(IdUsuario)
);

CREATE TABLE IMAGENES (
    IdImagen int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Tipo varchar(20) NOT NULL,
    Nombre varchar(20) NOT NULL,
    Size varchar(10) NOT NULL,
    Producto int NOT NULL,

    FOREIGN KEY (Producto) REFERENCES PRODUCTOS(IdProducto) ON DELETE CASCADE
   
);




INSERT INTO `USUARIOS` (`IdUsuario`, `Correo`, `Clave`, `Telefono`,`Administrador`) VALUES
(1, 'admin@admin', 'admin', '666666666',1);

INSERT INTO `USUARIOS` (`IdUsuario`, `Correo`, `Clave`, `Telefono`) VALUES
(2, 'usuario@usuario', 'usuario', '123456789');
 
INSERT INTO `PRODUCTOS` (`IdProducto`, `Propietario`, `Categoria`, `Nombre`, `Pais`, `Ciudad`, `CP`, `Direccion`, `Descripcion`, `Precio`, `TipoImagen`, `Imagen`) VALUES
(1, 1, 'Chalets', 'Casa de alffweed', 'España', 'Cullar', '18850', 'C/fefewer 79', 'Hola Amigos', '500000', 'image/jpeg', 'casa1.jpg'),
(2, 2, 'Pisos', 'Piso en Madrid', 'España', 'Madrid', '12121313', 'C/fdw9uiofcw', 'Piso en Madrid 0ewwe eoicvne\r\nfepwjogvwegewgv', '400000', 'image/jpeg', 'piso.jpeg');

INSERT INTO `IMAGENES` (`IdImagen`, `Tipo`, `Nombre`, `Size`, `Producto`) VALUES
(1, 'image/jpeg', 'ergegrd.jpeg', '6695', 1),
(2, 'image/jpeg', 'ergerger.jpeg', '7724', 1),
(3, 'image/jpeg', 'ergergerg.jpeg', '9096', 2),
(4, 'image/jpeg', 'fefedfcedffg.jpeg', '5969', 2),
(5, 'image/jpeg', 'fefefedfedfe.jpeg', '7410', 2),
(6, 'image/jpeg', 'feferg.jpeg', '7650', 2),
(7, 'image/jpeg', 'feffedfgw.jpeg', '5879', 2),
(8, 'image/jpeg', 'sedzbserh.jpeg', '4430', 2),
(9, 'image/jpeg', '1032875792.jpg', '45262', 2);
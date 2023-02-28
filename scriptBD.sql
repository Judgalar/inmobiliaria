DROP DATABASE IF EXISTS Inmobiliaria;
 
CREATE DATABASE Inmobiliaria CHARACTER SET utf8 COLLATE utf8_general_ci;

USE Inmobiliaria; 

create table USUARIOS (
    IdUsuario int AUTO_INCREMENT primary key not null,
    Correo varchar(80) unique not null,
    Clave varchar(45) not null,
    Telefono varchar(9) not null
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
    TipoImagen varchar(20) NOT NULL,
    Imagen varchar(50) NOT NULL,
    FOREIGN KEY (Propietario) REFERENCES USUARIOS(IdUsuario)
);

CREATE TABLE IMAGENES (
    IdImagen int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Tipo varchar(20) NOT NULL,
    Nombre varchar(20) NOT NULL,
    RutaImagen varchar(50) NOT NULL,
    Producto int NOT NULL,

    FOREIGN KEY (Producto) REFERENCES PRODUCTOS(IdProducto)
);




insert into USUARIOS(Correo, Clave, Telefono) 
values ('admin@admin', 'admin', '666666666');
 
 
CREATE DATABASE tarea_002;

USE tarea_002;

CREATE TABLE contactos (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  direccion VARCHAR(100),
  correo_electronico VARCHAR(50),
  numero_telefono VARCHAR(20)
);

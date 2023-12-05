CREATE DATABASE BDRegistro;

USE BDRegistro;

CREATE TABLE registros(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  correo VARCHAR(30) NOT NULL,
  contrasena VARCHAR(10) not null); 

insert into registros(nombre, apellido, correo, contrasena)
			values('Jesus','Cante','jesus@uth.edu.mx','123456789');

CREATE TABLE registross(
  id INT AUTO_INCREMENT PRIMARY KEY,
  correo VARCHAR(31) NOT NULL,
  contrasena VARCHAR(10) not null);

insert into registross(correo, contrasena)
      values('jesus@uth.edu.mx','123456789');
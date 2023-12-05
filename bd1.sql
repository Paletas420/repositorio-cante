CREATE DATABASE BDContactar;

USE BDContactar;

CREATE TABLE contactanos(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(10) NOT NULL,
  apellido VARCHAR(30) NOT NULL,
  correo VARCHAR(30) NOT NULL,
  mensaje VARCHAR(500) not null); 

insert into contactanos(nombre, apellido, correo, mensaje)
      values('Jesus','Cante','jesus@uth.edu.mx','Hola quisiera saber cuanto me cobran por crearme un plano 
        en 3d');
      
CREATE TABLE contactanoss(
  id INT AUTO_INCREMENT PRIMARY KEY,
  correo VARCHAR(30) NOT NULL,
  mensaje VARCHAR(500) not null); 

insert into contactanoss( correo, mensaje)
      values('jesus@uth.edu.mx','Hola, quiero un a caja de cable para red categotia 6 por favor y de casualidad entregan a domicilio');
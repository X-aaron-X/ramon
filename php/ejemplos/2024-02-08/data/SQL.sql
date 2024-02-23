# Legunaje de definicion de datos
DROP DATABASE IF EXISTS personas;
CREATE DATABASE personas;

USE personas;

# Legunaje de manipulacion de datos
CREATE TABLE persona(
  idPersona int AUTO_INCREMENT,
  nombre varchar(200),
  edad int,
  PRIMARY KEY(idPersona)
);

INSERT INTO persona 
  (nombre, edad) VALUES 
  ('persona1', 18),
  ('persona2', 45);

SELECT p.idPersona,
       p.nombre,
       p.edad FROM persona p;

CREATE TABLE cliente(
  idCliente int AUTO_INCREMENT,
  nombre varchar(200),
  edad int,
  nombreEmpresa varchar(200),
  telefono varchar(9),
  PRIMARY KEY(idCliente)
);

INSERT INTO cliente
  (nombre, edad, nombreEmpresa, telefono) VALUES 
  ('Cliente1', 18, 'Empresa1', '123456789'),
  ('Cliente2', 19, 'Empresa2', '123456789');

SELECT c.idCliente,
       c.nombre,
       c.edad,
       c.nombreEmpresa,
       c.telefono  FROM  cliente c;
DROP DATABASE IF EXISTS aplicacionFavoritos;

CREATE DATABASE aplicacionFavoritos;

USE aplicacionFavoritos;

CREATE TABLE favoritos (
  id int AUTO_INCREMENT,
  url varchar(300),
  titulo varchar(200),
  descripcion text,
  categorias VARCHAR(200),
  imagen varchar(200),
  PRIMARY KEY (id)
);

INSERT INTO 
  favoritos (url, descripcion, titulo, categorias) 
  VALUES 
    ('alpeformacion.es', 'Pagina Alpe', 'Pagina de la empresa', 'formacion'),
    ('formacion.es', 'Pagina de Formacion', 'Pagina de la empresa', 'formacion'),
    ('google.es', 'Pagina del buscador', 'Pagina de la empresa', 'buscador'),
    ('youtube.es', 'Pagina de videos', 'Pagina de la empresa', 'videos');

SELECT * FROM favoritos;
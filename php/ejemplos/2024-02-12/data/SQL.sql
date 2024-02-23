-- Crear la base de datos "personas"
DROP DATABASE IF EXISTS personas1;

CREATE DATABASE personas1;

-- Usar la base de datos "personas"
USE personas1;

-- Crear la tabla "personas"
CREATE TABLE personas (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    edad INT,
    fechaNacimiento DATE,
    poblacion VARCHAR(50),
    codigoPostal varchar(10),
    PRIMARY KEY (id)


);

INSERT INTO
    personas (
        nombre, apellidos, edad, fechaNacimiento, poblacion, codigoPostal
    )
VALUES (
        'Juan', 'García Pérez', 30, '1992-05-15', 'Santander', '39001'
    ),
    (
        'María', 'López Fernández', 25, '1997-09-20', 'Torrelavega', '39300'
    ),
    (
        'Pedro', 'Martínez Ruiz', 28, '1994-03-10', 'Laredo', '39770'
    ),
    (
        'Ana', 'Fernández Montero', 22, '1999-07-05', 'Castro Urdiales', '39700'
    ),
    (
        'Luis', 'Sánchez García', 35, '1986-12-12', 'Reinosa', '39200'
    ),
    (
        'Elena', 'Pérez Martín', 42, '1979-04-03', 'Colindres', '39750'
    ),
    (
        'Carlos', 'Rodríguez Gómez', 31, '1990-08-18', 'Los Corrales de Buelna', '39400'
    ),
    (
        'Laura', 'Ruiz Díaz', 27, '1994-05-22', 'Santoña', '39740'
    ),
    (
        'Javier', 'González Castro', 38, '1983-11-07', 'San Vicente de la Barquera', '39540'
    ),
    (
        'Isabel', 'Fernández Vega', 29, '1992-02-14', 'Comillas', '39520'
    ),
    (
        'Miguel', 'Pérez Soto', 33, '1988-06-28', 'Cabezón de la Sal', '39500'
    ),
    (
        'Carmen', 'Martín Iglesias', 40, '1981-12-09', 'Puente San Miguel', '39478'
    ),
    (
        'Antonio', 'Ruiz Alonso', 45, '1976-03-25', 'Toranzo', '39699'
    ),
    (
        'Sara', 'Gómez Ortega', 24, '1997-10-11', 'Polanco', '39470'
    ),
    (
        'Daniel', 'Sánchez Pérez', 26, '1995-07-19', 'Santa María de Cayón', '39690'
    );
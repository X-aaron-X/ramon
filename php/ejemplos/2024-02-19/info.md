# Aplicacion para gestion de la tabla libros

Necesito desarrollar una aplicacion con php sin utilizar clases para realizar el CRUD de la tabla libros

## Caracteristicas de la aplicacion

- Menu en la parte superior de todas las paginas con lo siguiente
    > Inicio: Nos muestra todos los registros.

    > Registrar

- Libreria con las funciones de control de
    > Control de errores

    > GridViewBotones

## Tabla Libros
Creamos una base de datos denomina Biblioteca y dentro una tabla libros.


Los campos de la tabla libros son:
- id: entero autoincrementla
- titulo: texto de 200 caracteres
- paginas: entero
- fechaPublicacion: fecha

## Paginas Proyecto
Las paginas del proyecto seran:
- funciones.php
- _form: un solo formulaio para actualizarr y insertar
- index: donde sale el listado de todos los libros
- inserta: para insertar un nuevo libro
- eliminar
- actualizar

### Pagina Index
En la parte superior colocamos el menu y despues una tabla con todos los registros.
En cada registro un boton para editar y otro para eliminar.
Cuando pulso eliminar me elimina directamente el registro.
Cuando pulso actualizar me lleva el formulario para modificar el egistro.

### Pagina de insertar
En la parte superior colocamos el menu.
Despues nos muestra el formuario para insertar un nuevo registro

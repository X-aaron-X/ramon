<?php
    use clases\Aplicacion;
    use clases\Header;
    use clases\Modelo;
    use clases\Pagina;

    require_once 'autoload.php';

    $mensaje = "";
    $aplicacion = new Aplicacion();
    $favoritos = new Modelo($aplicacion->db);

    // le indico que campos voy a insertar
    $favoritos->setCampos(["url", "titulo", "descripcion", "categorias"]);
    // le indico al modelo en donde tiene que insertar el registro
    $favoritos->tabla = "favoritos";

    if ($_POST) {
        $favoritos->setDatos($_POST)->save();
        $mensaje = "<div class='alert alert-success text-center'>
                        <h3 class='alert-heading'>El registro se ha insertado correctamente</h4>
                    </div>";
    }

    $cabecera = Header::ejecutar([
        "titulo" => "Pagina de insercion",
        "subTitulo" => $aplicacion->configuraciones['autor'],
        "salida" => "Aplicacion para mostrar paginas interesantes"
    ]);

    Pagina::comenzar();

    if (!$_POST) {
        // al formulario le paso los datos y la accion a mostrar en el boton
        $datos = $favoritos->datos;

        $accion = "insertar";
        require "_form.php";
    }
    else{
        echo $mensaje;
    }

    Pagina::terminar([
        "titulo" => "inicio",
        "cabecera" => $cabecera,
        "pie" => "Creado por: " . $aplicacion->configuraciones['autor']
    ]);

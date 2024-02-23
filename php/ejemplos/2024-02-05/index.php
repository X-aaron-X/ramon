<?php
    use src\Empleado;
    use src\Cliente;
    use src\Directivo;

    require_once 'autoload.php';

    $arrayEmpleados = [new Empleado(),new Empleado(),new Empleado(),new Empleado()];

    $arrayEmpleados[0]->setNombre('Ana')->setEdad(30);               
    $arrayEmpleados[0]->calcularSueldo(54);

    $arrayEmpleados[1]->setNombre('Luisa')->setEdad(45);               
    $arrayEmpleados[1]->calcularSueldo(45);

    $arrayEmpleados[2]->setNombre('Luis')->setEdad(55);               
    $arrayEmpleados[2]->calcularSueldo(123);

    $arrayEmpleados[3]->setNombre('Jose')->setEdad(19);               
    $arrayEmpleados[3]->calcularSueldo(8);


    foreach ($arrayEmpleados as $empleado) {
        echo $empleado . '<br>';
    }

    echo '<hr>';

    $arrayCliente = [new Cliente(),new Cliente(),new Cliente(),new Cliente()];

    $arrayCliente[0]->setNombreEmpresa('Alpe')->setTelefono('T1')->setNombre('Cesar')->setEdad(30);
    $arrayCliente[1]->setNombreEmpresa('Gobierno')->setTelefono('T2')->setNombre('Ramon')->setEdad(30);
    $arrayCliente[2]->setNombreEmpresa('Alpe')->setTelefono('T3')->setNombre('Carlos')->setEdad(30);
    $arrayCliente[3]->setNombreEmpresa('Alpe')->setTelefono('T4')->setNombre('Ana')->setEdad(30);

    foreach ($arrayCliente as $cliente) {
        echo $cliente . '<br>';
    }

    echo '<hr>';

    $arrayDirectivo = [new Directivo(),new Directivo()];

    $arrayDirectivo[0]->setCategoria('a')->setNombre('Jose')->setEdad(30);
    $arrayDirectivo[0]->calcularSueldo(5);

    $arrayDirectivo[1]->setCategoria('b')->setNombre('Luisa')->setEdad(45);
    $arrayDirectivo[1]->calcularSueldo(6);

    foreach ($arrayDirectivo as $directivo) {
        echo $directivo . '<br>';
    }
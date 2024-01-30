<?php
    use clases\herencia\Animal;
    use clases\herencia\Perro;
    use clases\herencia\Vaca;
    use clases\herencia\Persona;

    require_once 'autoload.php';

    $vaca1 = new Vaca("Lechera");
    var_dump($vaca1);

    echo "<hr>";

    $perro1 = new Perro();

    $perro2 = new Perro("Firulais");

    $animal = new Animal();

    $persona1 = new Persona("Javier", "Calle 1", "123456789");

    var_dump($perro1, $perro2, $animal, $persona1);

    echo "<hr>";

    //Llama al metodo descripcion de la clase Perro, como la clase perro no tiene ese metodo lo busca en la clase Animal
    echo $perro2->descripcion(); 

    echo "<hr>";

    //Llama al metodo descripcion de la clase Vaca. Como la clase Vaca tiene ese metedo lo utliza
    //La clase Animal tambien tiene la clase descripcion pero como la clase descripcion tambien esta en Vaca lo sobrescribe
    echo $vaca1->descripcion(); 

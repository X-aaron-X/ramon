<?php
    
    function productoArray(array $arrayNum): int {
        $producto = 0;
        $producto = array_product($arrayNum);
        
        return $producto;
    }

    $arrayNum = [1, 2, 3, 4, 5];
    echo productoArray($arrayNum);
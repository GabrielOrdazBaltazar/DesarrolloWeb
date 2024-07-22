<?php
    $productos =[
            [    
                'nombre'     => 'Tablet',
                'precio'     => 200,
                'disponible' => true
            ],
            [
                'nombre'     => 'Televicion',
                'precio'     => 200,
                'disponible' => true
            ],
            [
                'nombre'     => 'Monitor curvo',
                'precio'     => 200,
                'disponible' => false
            ]
        ];   

    echo "<pre>";
    var_dump($productos);

    //Convertimos la informacion en json, para que vea los caracteres especiales en espaniol
    $json = json_encode($productos, JSON_UNESCAPED_UNICODE);
    var_dump($json);
    echo "<pre>";

    //convertimos un strin(json) a un arreglo 
    $json_array = json_decode($json);
    var_dump($json_array);
    echo "<pre>"; 
?>
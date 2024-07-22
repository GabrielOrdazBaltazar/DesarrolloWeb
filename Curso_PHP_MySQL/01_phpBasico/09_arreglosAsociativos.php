<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    //Los objetos asociativos sonel equivalente a un objeto 
    $cliente = [
        'nombre'      => 'juan',
        'saldo'       => 200,
        'informacion' => [
            'tipo' => 'premium',
            'disponible' => 100
        ]
    ];

    //Para verlo con us scaracteristicas
    echo "<pre>";
    var_dump($cliente);
    echo "<pre>";

    //Para ver un elemento en especifico
    echo $cliente['nombre'];
    echo $cliente['saldo'];

    //Para acceder a la informacion del array
    echo $cliente['informacion']['tipo'];
    echo "<br>";
    echo $cliente['informacion']['disponible'];
    
    //Para agregar un elemento al arreglo 
    $cliente['codigo'] = 1920008;
    include 'includes/footer.php';
?>  
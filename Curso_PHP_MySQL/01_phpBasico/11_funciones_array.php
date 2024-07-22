<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    $carrito = ['Tablet','Computadora','Television'];
    $numeros = array(1,9,5,7,2,6,0);
    $cliente =array(
        'saldo'  => 200,
        'tipo'   => 'Premium',
        'nombre' => 'Juan'
    );

    //Buscar elementos en un arrglo
    var_dump(in_array('Tablet',$carrito));

    //Ordenar de menor a mayor elementos de un arreglo 
    sort($numeros);

    echo "<pre>";
    var_dump($numeros);
    echo "<pre>";

    //Ordenar de mayor a menor elementos de un arreglo 
    //Ordenar de menor a mayor elementos de un arreglo 
    rsort($numeros);

    echo "<pre>";
    var_dump($numeros);
    echo "<pre>";  

    echo "<pre>";
    var_dump($cliente);
    echo "<pre>";  

    //Ordenar un arreglo asociativo por valores 
    asort($cliente);
    echo "<pre>";
    var_dump($cliente);
    echo "<pre>"; 
    
    //Ordenar un arreglo asociativo por llaves 
    ksort($cliente);
    echo "<pre>";
    var_dump($cliente);
    echo "<pre>"; 
    
    //Ordenar un arreglo asociativo por llaves en forma iversa 
    krsort($cliente);
    echo "<pre>";
    var_dump($cliente);
    echo "<pre>"; 

    include 'includes/footer.php';
?>  
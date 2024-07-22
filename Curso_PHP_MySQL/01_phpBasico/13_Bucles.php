<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    $i =0;

    //Bucle While
    while($i < 10){
        echo $i . "<br>";
        $i++;
    }

    $i =0;
    //Do while 
    do{
        echo $i . "<br>";
        $i++;

    }while($i<10);

    //Bucle for
    for($i = 0; $i<10; $i++){
        echo $i . "<br>";
    }

    //Ejercicio 
    /*
    del 0 al 100
    si es multiplo de 3 escribe fizz
    si es multiplo de 5 escribir buzz
    si es multiplo de 3 y 5 ecribir fizz buzz
     */
    for($i = 0; $i<=100; $i++){
        if($i % 3 === 0 && $i % 5 ==0){
            echo $i . "= fizz buzz" . "<br>";
            
        }else if($i % 3 === 0){
            echo $i . "= fizz" . "<br>";
            
        }else if($i % 5 === 0){
            echo $i . "= buzz" . "<br>";
            
        }else{
            echo $i .  "<br>";
        }
    }

    //Bucle for de despliegue
    $clientes = array('Pedro','Juan','Karen');

    foreach($clientes as $cliente){
        echo $cliente . "<br>";
    }

    $cliente =[
        'nombre' => 'juan',
        'saldo'  => 200,
        'tipo'   => 'Premium'
    ];

    foreach($cliente as $key => $valor){
        echo $key . " - " . $valor . "<br>";
    }

    include 'includes/footer.php';
?>  
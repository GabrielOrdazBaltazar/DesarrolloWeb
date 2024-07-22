<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    //Arreglo
    $carrito = ['Tablet','Televicion','Computadora'];
    //Revisar los arregos de mejor manera
    echo"<pre>";
    var_dump($carrito);
    echo "</pre>";

    //Otra forma de crear un Arreglo
    $clientes = array('Cliente1','Cliente2','Cliente3');
    //Revisar los arregos de mejor manera
    echo"<pre>";
    var_dump($clientes);
    echo "</pre>";

    //Acceder a un elemento en especifico 
    echo $carrito[1];

    //Agregarun elemeno al arreglo
    $carroto[3] = "Nuevo elelmento";

    //Agregar al final del arreglo
    array_push($carrito,'Audifonos');

    //Agregar al inicio 
    array_unshift($carrito,'Smartwhac');
    
    include 'includes/footer.php';
?>    
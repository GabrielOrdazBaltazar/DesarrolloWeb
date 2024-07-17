<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    $nombreCliente ="Gabriel Ordaz";

    //Escribe el numero de caracteres
    echo strlen($nombreCliente);
    var_dump($nombreCliente);

    //Eliminar espacios en blanco
    $texto = trim($nombreCliente);
    echo $texto;

    //Comvertir los datos a mayusculas 
    echo strtoupper($nombreCliente);

    //Convertir a minusculas 
    $mail = "correo@correo.com";
    $mail2 = "Correo@correo.com";

    //Remplasar una parte de la cadena 
    echo str_replace('Gabriel','G',$nombreCliente);

    //Revisar si un string exise o no,devuelve la posicion en un string
    echo strpos($nombreCliente,'Gabriel');   
    
    //Unir diferentes variables 
    $tipoCliente = "Premium";
    echo "El cliente ". $nombreCliente . " es " . $tipoCliente;
    //Otra forma
    echo "El cliete {$nombreCliente} es {$tipoCliente}";

    include 'includes/footer.php';
?>    
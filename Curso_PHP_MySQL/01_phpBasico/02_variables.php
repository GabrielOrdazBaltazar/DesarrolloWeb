<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';

    //Para crear una variables 
    $nombre = "Gabriel";

    //Imprimir el valor de una variables 
    echo $nombre;
    var_dump($nombre);

    //Para crear una constante
    define('constante',"Este es el valor de la constante");
    //Para imprimir una constante lo hacemos sin el signo de $
    echo constante;

    //Otra forma para crar una constante 
    const constante2 = "Hola soy una constante";
    echo constante2;

    include 'includes/footer.php';
?>    
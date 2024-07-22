<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';

    $numero1 = 20;
    $numero2 = 30;
    $numero3 = 30;
    $numero4 = "30";

    //Mayor que 
    var_dump($numero1 > $numero2);
    echo"<br>";

    //Menor que 
    var_dump($numero1 < $numero2);
    echo"<br>";

    //Mayor igual
    var_dump($numero1 >= $numero2);
    echo"<br>";

    //Menor igual
    var_dump($numero1 < $numero2);
    echo"<br>";

    //Igualdad
    var_dump($numero2 == $numero3);
    echo"<br>";

    //Igualdad que verifica el calor y tambien el tipo de dato deben ser iguales para que sea true 
    var_dump($numero2 == $numero3);
    echo"<br>";

    //Si el numero de la izquierda es menor entonces nos da -1, 0 si son iguuales, si el de la izquierda es mayor entonces 1 
    var_dump($numero1 <=> $numero2);

    include 'includes/footer.php';
?>    
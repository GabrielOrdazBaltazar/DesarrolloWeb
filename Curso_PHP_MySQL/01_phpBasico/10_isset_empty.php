_<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    $clientes =[];
    $clientes2 = array();
    $clientes3 = array('Pedro','Juan','Karen');
    $cliente = [
        'nombre' => 'Juan',
        'saldo'  => 200
    ];

    //Empty revisa si el arreglo esta vacio, si lo esta nos devolvera un true
    var_dump (empty($clientes));
    //Si no lo esta nos devolvera un false
    var_dump (empty($clientes3));
    echo "<br>";


    //Isset -Revisa sii un arreglo esta creado o una propiedad esta definida
    var_dump( isset($clientes4));
    var_dump( isset($clientes3));
    var_dump( isset($clientes2));
    var_dump( isset($clientes));

    echo "<br>";

    //Revisamos si un arreglo asociativo tiene dentro otros elementos
    var_dump( isset($cliente['nombre']));
    var_dump( isset($cliente['codigo']));
    include 'includes/footer.php';
?>  
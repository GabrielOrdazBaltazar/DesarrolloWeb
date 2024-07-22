<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    //Creamos la funcion, si no se le manda un numero agrega el valor por defaull que es 0
    function sumar($numero1 = 0,$numero2 = 0){
        echo $numero1 + $numero2;
    }

    //llamamos a la funncion 
    sumar(10,20);
    echo "<br>";
    function usuarioAutenticado($autenticado){
        if($autenticado === true){
            return "El usuario esta autenticado";
        }else{
            return "El usuario no esta autenticado";
        }        
    }

    $usuario = usuarioAutenticado(true);
    echo $usuario;

    include 'includes/footer.php';
?>  
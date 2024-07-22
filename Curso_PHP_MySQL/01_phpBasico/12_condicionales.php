<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    $autenticado = false;
    $admin =false;
    
    if($autenticado || $admin  ){
        echo "Usuario autenticado correctamente";
    }else{
        echo "Usuario no autenticado. Inicia secion";
    }

    echo "<br>";

    //if anidados 
    $cliente =[
        'nombre' => 'Juan',
        'saldo'  => 200,
        'informacion' => [
            'tipo' => 'Premium'
        ]
    ];

    //Negacion con el signo !
    if(!empty($cliente)){
        echo"El arreglo de cliente no esta vacio";
        echo "<br>";
        
        if($cliente['saldo'] > 0 ){
            echo 'El saldo del cliente esta disponible';
        }else{
            echo "No hay saldo";
        } 

    }else{
        echo "El arreglo de cliente esta vacio";
    }

    //Condicional Switch
    $tecnologia = 'PHP';

    SWITCH($tecnologia){
        case 'PHP':
            echo "PHP, un exelente lenguaje";
        break;
        
        case 'JavaScript':
            echo "Genial lenguaje para web";

        break;
            
        default:
            echo "Algun lenguaje que no se cual es";
        break;    
    }

    include 'includes/footer.php';
?>  
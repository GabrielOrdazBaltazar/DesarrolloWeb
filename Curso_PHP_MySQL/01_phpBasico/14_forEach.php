<?php 
    //Libreria para agregar estilos
    include 'includes/header.php';
    
    $productos =[
        [    
            'nombre'     => 'Tablet',
            'precio'     => 200,
            'disponible' => true
        ],
        [
            'nombre'     => 'Televicion',
            'precio'     => 200,
            'disponible' => true
        ],
        [
            'nombre'     => 'Monitor curvo',
            'precio'     => 200,
            'disponible' => false
        ]
    ];    

    foreach($productos as $producto){ ?>
        <li>
            <p>Producto: <?php echo $producto['nombre']; ?> </p>
            <p>Precio: <?php echo "$" . $producto['precio']; ?> </p>
            <p><?php echo ($producto['disponible']);?></p>

            <?php
                if($producto['disponible']){
                    echo "<p>Disponible</p>";
                }else{
                    echo "<p>No disponible</p>";
                }
            ?>    
        </li>
       <?php 
    }

    include 'includes/footer.php';
?>  
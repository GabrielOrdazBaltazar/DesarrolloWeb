<?php 
//para el tipado fuerte
    declare(strict_types=1);
    include 'includes/header.php';

    //Encapsulamiento 
    //Public Se puede acceder y modificar en cualquier lugar (clase u objeto)
    //protected se puede acceder unicamente en la calase 
    //Private solo miembbros de la misma clase pueden acceder a el 
    class Producto{
        //Atributos 
        private $nombre;
        private $precio;
        private $disponible;

        //Constructores 
        public function __construct(string $nombre,int $precio,bool $disponible){
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->disponible = $disponible;
        }

        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }

        //Metodos
        public function mostrarProducto(){
            echo "El producto es " . $this->nombre . " y su precio es de " . $this->precio; 
        } 


    }

    //Inatanciamos la clase 
    $producto = new Producto('Tablet',300,true);
    //Mostrar resultado con los metodos getter 
    echo $producto->getNombre();
    echo "<br>";
    //modificar por medio de los metodos setter
    $producto->setNombre('Celuelar');
    echo $producto->getNombre();

    include 'includes/footer.php';
?>
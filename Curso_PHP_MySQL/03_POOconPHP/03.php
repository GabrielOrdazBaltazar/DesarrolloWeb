<?php 
//para el tipado fuerte
    declare(strict_types=1);
    include 'includes/header.php';

    //Metodos estaticos 
    class Producto{
        //Atributos 
        private $nombre;
        private $precio;
        private $disponible;

        //Atributo estatico 
        public static $imagen = "Imagen.jpg";

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

        //Metodo estatico
        public static function obtenerProducto(){
            //Llamamos a un atributto estatico
            return self::$imagen;
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
    echo '<br>';

    //Llamando a un metod estatico 
    echo Producto::obtenerProducto();

    include 'includes/footer.php';
?>
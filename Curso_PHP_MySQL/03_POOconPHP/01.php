<?php 
//para el tipado fuerte
    declare(strict_types=1);
    include 'includes/header.php';
    //Definir una clase 
    class Producto{
        //Atributos 
        public $nombre;
        public $precio;
        public $disponible;

        //Constructores 
        public function __construct(string $nombre,int $precio,bool $disponible){
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->disponible = $disponible;
        }

        //Metodos
        public function mostrarProducto(){
            echo "El producto es " . $this->nombre . " y su precio es de " . $this->precio; 
        } 


    }

    //Inatanciamos la clase 
    $producto = new Producto('Tablet',300,true);
    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
    //Usando el metodo mostararproducto 
    $producto->mostrarProducto();

    //Inatanciamos la clase 
    $producto2 = new Producto('Monitor curvo',300,true);
    echo "<pre>";
    var_dump($producto2);
    echo "</pre>";
    //Usando el metodo mostararproducto 
    $producto2->mostrarProducto();    


    include 'includes/footer.php';
?>
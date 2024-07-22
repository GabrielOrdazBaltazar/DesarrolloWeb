<?php include 'includes/header.php';

//Otra forma de instanciar el namespace en otra clase 
use App\Clientes;
use App\Detalles;

//Creamos una funcion que se encargue de importar las calses

function mi_autoload($clase){
    //Dividimos la cadena de clase en dos partes despues de que encuentre el simbolo "\"
    $partes = explode('\\', $clase);

    //de esa forma quietamos el \App de la cadena solo pasando la posicion 2 que es el nombre de la clase
    //Agregamos la ruta de la cale
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}

//Busca las clases segun la importes 
spl_autoload_register('mi_autoload');



//Instanciamos objetos con esas calses pero esta vez con su namespace
$clientes = new Clientes();
echo "<br>";
$detalles = new Detalles();
echo "<br>";
$clientes2 = new Clientes();


include 'includes/footer.php';
<?php 
// para el tipado fuerte
declare(strict_types=1);
include 'includes/header.php';


// Herencia 
class Transporte {
    // Atributos 
    protected int $ruedas;
    protected int $capacidad;

    public function __construct(int $ruedas, int $capacidad) {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas .  " ruedas y una capacidad de " . $this->capacidad .  " personas";
    }

    public function getRuedas(){
        return $this->ruedas;
    }
}


// Creamos una segunda clase 
class Bicicleta extends Transporte {
    // Puedes agregar métodos específicos de la bicicleta aquí
}

class Automovil extends Transporte {
    // Puedes agregar métodos específicos del automóvil aquí
    // Atributos 
    protected int $ruedas;
    protected int $capacidad;
    protected string $transmicion;

    public function __construct(int $ruedas, int $capacidad,string $transmicion) {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
        $this->transmicion = $transmicion;
    }

    public function getTransmision(): string{
        return $this->transmicion;
    }

    //Reescribimos la funcion getInfo
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas .  " ruedas y una capacidad de " . $this->capacidad .  " personas y no gasta gasolina";
    }    
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$auto = new Automovil(4, 4,'Manual');
echo $auto->getInfo();
echo " Tipo de transmicion " .  $auto->getTransmision();

include 'includes/footer.php';
?>  

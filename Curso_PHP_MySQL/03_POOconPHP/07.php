<?php include 'includes/header.php';
//Interfaces
interface TransporteInterfaz {
    public function getInfo():string;
    public function getRuedas():int;

}

//Agregamos la clase TransporteInterfaz a la calse Transporte
class Transporte implements TransporteInterfaz{
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

    public function getRuedas(): int{
        return $this->ruedas;
    }
}

//Polimorfismo 
class Automovil extends Transporte implements TransporteInterfaz{
    // Atributos 
    protected int $ruedas;
    protected int $capacidad;
    protected string $color;

    public function __construct(int $ruedas, int $capacidad, string $color) {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
        $this->color = $color;
    }

    public function getInfo(): string {
        return "El transporte auto tiene" . $this->ruedas .  " ruedas y una capacidad de " . $this->capacidad .  " personas y tiene el color" . $this->color;
    }

    public function getColor():string{
        return $this->color;
    }

}

echo "<pre>";
var_dump($transporte = new Transporte(8,20));
var_dump($auto = new Automovil(4,4,'Rojo'));
echo "<pre>";

echo "<pre>";
echo $transporte->getInfo();
echo "<pre>";
echo $auto->getInfo();
echo "<pre>";
echo $auto->getColor();
include 'includes/footer.php';
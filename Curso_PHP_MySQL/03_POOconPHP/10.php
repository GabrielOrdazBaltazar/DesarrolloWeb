<?php include 'includes/header.php';

//Conectams a la BD con PDO 
$db = new PDO('mysql:host=localhost; dbname=appsalon', 'root' ,'tachyeldragon123');

//Agregamos la variable que tendra el query
$query = "SELECT fecha, hora FROM citas;";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Obtenemos los resultados
$resultado = $stmt->fetchAll();

//Para mostrarlo
echo "<br>";
var_dump($resultado);
echo "<br>";
//Para mostara todo 
foreach($resultado as $propiedad):
    echo "<br>";
    echo $propiedad['fecha'];
    echo "<br>";
    echo $propiedad['hora'];
endforeach;    

include 'includes/footer.php';
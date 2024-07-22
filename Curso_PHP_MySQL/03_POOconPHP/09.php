<?php include 'includes/header.php';
//Conectar a la base de datos conn Mysqli
$db = new mysqli('localhost','root','tachyeldragon123','appsalon');

//Agregamos la variable que tendra el query
$query = "SELECT fecha, hora FROM citas;";

//Preparamos stm que es la variable que contendra las faces de la consulta del query
$stmt = $db->prepare($query);

//Ejecutamos la consulta 
$stmt->execute();

//Creamos la variable en donde se conendra el resultado
$stmt->bind_result($titulo,$hora);

//asignamos el resultado
$stmt->fetch();

//Imprimir el resultado
var_dump($titulo);
var_dump($hora);

echo "<br>";

//Para iprimar todas o varias 
while($stmt->fetch()){
    var_dump($titulo);
    var_dump($hora);
}

include 'includes/footer.php';
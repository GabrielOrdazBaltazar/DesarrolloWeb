<?php
    function obtener_servicios(){
        try{
            //Importar las credenciales (database.php)
            require 'database.php';

            //consulta sql
            $sql = "SELECT * FROM servicios;";

            //realizar la consulta
            $consulta = mysqli_query($db, $sql);          

            //acceder a los resultados
            /*
            echo "<pre>";
            var_dump (mysqli_fetch_assoc($consulta));
            echo "<pre>";
            */
        
            //cerrar la conexion 
            mysqli_close($db);

            //Retornar consulta 
            return $consulta;            
            
        }catch(\Throwable $th){//Throwable es una funcion que nos sirve para indicar el error 
            var_dump($th);
        }
    }

?>
<?php 
//Aplicando tipado fuerte
declare(strict_types=1);
//Funcion suma
function sumar($a,$b){


    //Añadiendo excepcion para el manejo de errores
    try{
        if(!is_numeric($a) || !is_numeric($b)){
            throw new Exception('uno o mas valores son invalidos');
        }
        echo 'El resultado de la suma es: '.$a+$b;

    }catch(Exception $ex){
        echo 'Se ha producido una excpecion '.$ex->getMessage();
    }
    
}

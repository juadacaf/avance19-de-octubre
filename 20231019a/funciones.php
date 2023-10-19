<?php

    //Es una impresión que se mostrara en los archivos que esten incluidos 
    echo "Hola=";
    function consulta(){
        //inicializa la variable
        $salida=0;
        //calcula el area de un triangulo 
        //conecta a una base de datos
        $conexion = mysqli_connect('localhost','root','','db_ejemplo');
        $salida=10*2/2;

        //retorna la función
        return $salida;
    }


    //funcion para calcular el area de un rectángulo
    function calcular(){
    //inicializa la variable
    $salida=0;
    //calcula el area de un rectángulo
    $salida=4*8;
    //retorna la función
    return $salida;
    }
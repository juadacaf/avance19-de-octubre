<?php

    //Es una impresión que se mostrara en los archivos que esten incluidos 
    echo "Hola=";
    function consulta(){
        //inicializa la variable
        $salida=0;
        //calcula el area de un triangulo 
        
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

    function conexion(){
        //inicializa la variable
        $salida="";
        //conecta a una base de datos
        $conexion = mysqli_connect('localhost','root','','db_ejemplo');
        //es una suma de una base de datos 
        $sql=" SELECT 2+1 ";
        //contatena la suma 
        $sql.="AS SUMA";
        //da el resultado 
        $imprimir= $conexion->query("$sql");

        //es para que muestre el resultado
        while($fila = $imprimir->fetch_assoc())
        {
        //imprime en el navegador la variable 'SUMA'
        $salida.=$fila['SUMA'];
        }
       //retorna la función
        return $salida;
    }

<?php

    //Es una impresión que se mostrara en los archivos que esten incluidos 
    
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
        
        //cierra la conexion
       $conexion->close();

       //retorna la función
        return $salida;
    }

    
    function calculo2(){
        //inicializa la variable
        $salida=0;
        //conecta a una base de datos
        $conexion = mysqli_connect('localhost','root','','db_ejemplo');
        //es una suma de una base de datos 
        $sql=" SELECT 10 as n1, 20 as n2 ";
        
        //da el resultado 
        $imprimir= $conexion->query("$sql");

        //es para que muestre el resultado
        while($fila = $imprimir->fetch_array())
        {
        //imprime en el navegador la variable 'SUMA'
        $salida += $fila['0'];
        $salida += $fila['1'];
        }
        
        //cierra la conexion
       $conexion->close();

       //retorna la función
        return $salida;
    }

    function calculo3(){
        //inicializa la variable
        $salida=0;
        //conecta a una base de datos
        $conexion = mysqli_connect('localhost','root','','db_ejemplo');
        //es una suma de una base de datos 
        $sql=" SELECT 10 as n1, 20 as n2 ";
        
        //da el resultado 
        $imprimir= $conexion->query("$sql");

        //es para que muestre el resultado
        while($fila = $imprimir->fetch_assoc())
        {
        //imprime en el navegador la variable 'SUMA'
        $salida += $fila['n1'];
        $salida += $fila['n2'];
        }
        
        //cierra la conexion
       $conexion->close();

       //retorna la función
        return $salida;
    }





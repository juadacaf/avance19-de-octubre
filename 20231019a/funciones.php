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
        while($fila = $imprimir->fetch_assoc())
        {
        //primer numero
        $salida += $fila['n1'];
        //segundo numero
        $salida += $fila['n2'];
        }
        
        //cierra la conexion
       $conexion->close();

       //retorna la función
        return $salida;
    }
    function calculo3(){
        //inicializa la variable
        $salida="";
        //conecta a una base de datos
        $conexion = mysqli_connect('localhost','root','','db_ejemplo');
        //es una suma de una base de datos 
        $sql=" SELECT 17 as edad ";
        
        //da el resultado 
        $imprimir= $conexion->query("$sql");

        //es para que muestre el resultado
        while($fila = $imprimir->fetch_assoc())
        {
            //si es mayor de edad
            if ( $fila ['edad']>=18){
                //muestra si es mayor de edad
                $salida .= $fila['edad']. "ERES MAYOR DE EDAD:)";
            //si es menor de edad
            }else{
            //muestra si es menor de edad
            $salida .= $fila['edad']."ERES UN POLLITO:(";
        }
        }
        
        //cierra la conexion
       $conexion->close();

       //retorna la función
        return $salida;
    }

    function contar_usuarios(){
        //inicializa la variable
        $salida="";

        //conecta a una base de datos
        $conexion = mysqli_connect('localhost','root','','db_ejemplo');

         //es una suma de una base de datos 
         $sql=" SELECT count(*) AS contar FROM tb_usuarios ";

         //da el resultado 
         $imprimir= $conexion->query("$sql");
 
         //es para que muestre el resultado
         while($fila = $imprimir->fetch_assoc())
         {
         //imprime en el navegador la variable 'SUMA'
         $salida .=$fila['contar'];
         }
         
         //cierra la conexion
        $conexion->close();
 
        //retorna la función
         return $salida;
    

    }

    function registrar($documento,$nombre,$correo,$clave,$categoria)
{
      //inicializa la variable
    $salida = "";
    //conecta a una base de datos
    $conexion = mysqli_connect('localhost','root','','db_ejemplo');
    //inserta a una persona en la base de datos
    $imprimir = "INSERT INTO tb_usuarios VALUES ('$documento','$nombre','$correo','$clave','$categoria')";
    //es para que muestre el resultado
    $slq = $conexion->query("$imprimir");
    //cierra la conexion
    $conexion->close();
    //retorna la función
    return $salida;
    
}
//FUNCION PARA BORRAR PERSONAS
function borrar($correo,$clave)
{
   
        //inicializa la variable
        $salida = "";
        //conecta a una base de datos
        $conexion = mysqli_connect('localhost','root','','db_ejemplo');
     //BORRAR  a una persona en la base de datos
    $imprimir = "DELETE FROM tb_usuarios where usuario_correo='$correo' and usuario_contrasena='$clave';";
     //es para que muestre el resultado
    $slq = $conexion->query("$imprimir");
     //cierra la conexion
    $conexion->close();
    //retorna la función
    return $salida;
    
}

function actualizar($documento, $nombre, $correo, $clave, $categoria, $sitio,$invitacion)
{
    // Inicializa la variable
    $salida = "";

    // Conecta a la base de datos (reemplaza con tus propias credenciales)
    $conexion = mysqli_connect('localhost', 'root', '', 'db_ejemplo');

    // Actualiza el registro en la base de datos
    $imprimir = "UPDATE tb_usuarios 
                 SET usuario_nombre='$nombre', usuario_correo='$correo', usuario_contrasena='$clave', categoria_nombre='$categoria', sitio='$sitio' 
                 WHERE id_usuario='$documento'";

    // Ejecuta la consulta de actualización
    $sql = $conexion->query($imprimir);

    // Verifica si la actualización fue exitosa
    if ($conexion->affected_rows > 0) {
        $salida = "Registro actualizado con éxito.";

        // Agrega un enlace al sitio web
        $salida .= "<a href='$sitio'>$invitacion</a>";
    } else {
        $salida = "Error al actualizar el registro: " . mysqli_error($conexion);
    }

    // Cierra la conexión
    $conexion->close();

    // Retorna el mensaje de salida
    return $salida;
}
    







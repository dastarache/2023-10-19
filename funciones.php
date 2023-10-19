<?php 
    function consulta(){
        $salida=0;//inicializa la varible 
         $conexion=mysqli_connect('localhost','root','root','nueva' );//crea conexion a la base de datos 
         $sql="select 2+1";
               $sql.=" as suma";// concatena con el sql de arriba para ahorrar espacio
               $r=$conexion->query($sql);//ejecuta una consulta
         
         //recorre el recordset
         while($fila=mysqli_fetch_assoc($r)){
            // inch o acumula 
            $salida+=$fila['suma'];
         }
         return $salida;// retorna la operacion 

         }

function conteo_de_personas(){//nombre de la funcion
    $conexion=mysqli_connect('localhost','root','root','nueva');//conexion
    $sql="select count(*) from usuario;";//consulta a la base de datos
    $r=$conexion->query($sql);//ejecuta la consulta
    while($fila=mysqli_fetch_assoc($r)){
        $salida=$fila['count(*)'];
    }
    mysqli_close($conexion);//cerrado de la conexion
    return $salida;
}


  function insertar_personas(){//nombre de la funcion
    $conexion=mysqli_connect('localhost','root','root','nueva');//conexion
    $sql="insert into usuario(id_usuario, nombre, contraseña) values( '7', 'maria mendez', '2020' );";//consulta a la base de datos
    $r=$conexion->query($sql);//ejecuta la consulta
    $salida=mysqli_affected_rows($conexion);//afeca a la conexion para que deje ingresar los datos
    mysqli_close($conexion);//cerrado de la conexion
    return $salida;//retorna la operacion 
}


}


function borrar_persona($id){//nombre de la funcion
    $conexion=mysqli_connect('localhost','root','root','nueva');//conexion
    $sql="delete from usuario where id_usuario=$id;";//consulta de bases de datos
    $r=$conexion->query($sql);//ejecuta la consulta
    $salida=mysqli_affected_rows($conexion);//se utliza para ver el numero de filas afectadas
    mysqli_close($conexion);//cerrado de la consulta
    return $salida;//retorna la operacion
}




?>










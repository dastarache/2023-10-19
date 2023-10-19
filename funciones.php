<?php 
    function consulta(){
        $salida=0;//inicializa la varible 
         $conexion=mysqli_connect('localhost','root','root','nueva' );//crea conexion a la base de datos 
         $sql="select 2+1";
               $sql.="as suma";// concatena con el sql de arriba para ahorrar espacio
               $r=$conexion->query($sql);//ejecuta una consulta
         return $salida;// retorna la operacion 
}
?>

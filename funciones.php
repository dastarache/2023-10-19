<?php 
    function consulta(){
        $salida=0;//inicializa la varible 
         $conexion=mysqli_connect('localhost','root','root','nueva' );//crea conexion a la base de datos 
         $sql="select 2+1";
               $sql.="as suma";
               $r=$conexion->query($sql);
         return $salida;// retorna la operacion 
}
?>

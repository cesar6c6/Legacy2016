<?php
//incluir la conexion
require_once '../config/AccesoDB.php';

class CCategoriaM
{ 
 
    public function ListAll()
    {
        $conn= AccesoDB::getConnectionPDO();
        $sql="call SP_TB_CATEGORIASelectAll";
        //Ejecucion
        $stmt=$conn->query($sql);
        //Resultados
        $results=$stmt->fetchAll();
        //retorno
        return $results;
    }
    function SelectByIDCategoria($pIdCate)
    {      
       //indicamos conexion
       $conn=  AccesoDB::getConnectionPDO();
       //indicamos el nombre del SP
       $sql="CALL SP_TB_CATEGORIAByIDCategoria(?)";
       //preparar sentencia
       $stmt=$conn->prepare($sql);
       //parametros de entrada
       $stmt->bindParam(1,$pIdCate,PDO::PARAM_INT);
       //ejecutar sentencia
       $stmt->execute();
        //Resultados
       $results=$stmt->fetchAll();
        //retorno
       return $results;       
    }

}

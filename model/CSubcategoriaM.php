<?php
require_once '../config/AccesoDB.php';
class CSubcategoriaM 
{
     function ListByIDCategoria($pIdCate)
    {      
       //indicamos conexion
       $conn=  AccesoDB::getConnectionPDO();
       //indicamos el nombre del SP
       $sql="CALL SP_TB_SUBCATEGORIASelectByIDCategoria(?)";
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
    
     function SelectByIDSubCategoria($pIdSub)
    {      
       //indicamos conexion
       $conn=  AccesoDB::getConnectionPDO();
       //indicamos el nombre del SP
       $sql="CALL SP_TB_SUBCATEGORIASelectByID(?)";
       //preparar sentencia
       $stmt=$conn->prepare($sql);
       //parametros de entrada
       $stmt->bindParam(1,$pIdSub,PDO::PARAM_INT);
       //ejecutar sentencia
       $stmt->execute();
        //Resultados
       $results=$stmt->fetchAll();
        //retorno
       return $results;       
    }
}

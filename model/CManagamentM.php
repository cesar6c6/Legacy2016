<?php

//AGREGAR LA CONEXION HACIA LA BD
require_once '../config/AccesoDB.php';
class CManagamentM {

    function validateAdmin($Login, $Password)
    {
        $conn= AccesoDB::getConnectionPDO();
        $sql="CALL SP_TB_ADMILogin(?,?)";
        $stmt=$conn->prepare($sql);
        //indicamos los parametros
        $stmt->bindParam(1,$Login,  PDO::PARAM_STR,20);
        $stmt->bindParam(2,$Password,  PDO::PARAM_STR,20);
        //ejecutar sentencia
        $stmt->execute();
        //Resultados
        $results=$stmt->fetchAll();
        //retorno
        return $results;      
    }   
}

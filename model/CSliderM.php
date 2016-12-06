<?php
//incluir la conexion
require_once '../config/AccesoDB.php';

class CSliderM 
{
    
    public function ListAll()
    {
        $conn= AccesoDB::getConnectionPDO();
        $sql="call SP_TB_SLIDERSelectAll";
        //Ejecucion
        $stmt=$conn->query($sql);
        //Resultados
        $results=$stmt->fetchAll();
        //retorno
        return $results;
    }


}

<?php

require_once '../config/AccesoDB.php';
require_once '../entitys/CMarcaE.php';
class CMarcaM
{
    //funcion que permite listar 
     public function ListAll()
    {
         //estab. conexion
        $conn= AccesoDB::getConnectionPDO();
        //indicamos el SP
        $sql="call SP_TB_MARCASelectAll";
        //Ejecutar la sentencia
        $stmt=$conn->query($sql);
        //almacenar los Resultados
        $results=$stmt->fetchAll();
        //retorno
        return $results;
    }
    
    function ListRows() {
        //crea un objeto a partir de Marca
        $oMod = new CMarcaM();
        //recupera las filas
        $rowsM = $oMod->ListAll();
        //variable para mostrar los registros
        $salida = '';

        //recorrer las filas
        foreach ($rowsM as $rowm) {
            $salida.='<tr>
                        <td>'.$rowm['id_marc'].'</td>
                        <td>'.$rowm['nomb_marc'].'</td>
                        <td>'.$rowm['esta_marc'].'</td>
                        <td><img class="img-responsive" src='.$rowm['imag_marc'].'></td>
                        <td  style="text-align:center;">	
                           <a href="javascript:editarRegistro('.$rowm['id_marc'].');" class="glyphicon glyphicon-edit"></a>
                           <a href="javascript:eliminarRegistro('.$rowm['id_marc'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                    </tr>';
        }
        return $salida;
    }
    
    //funcion que recibe como parametro un objeto a partir 
    //de marcaE
    public function Insert(CMarcaE $oent) {
        error_reporting(E_ALL & ~E_NOTICE);
        //indicamos conexion
        $conn = AccesoDB::getConnectionPDO();
        //indicamos el nombre del SP
        $sql = "CALL SP_TB_MARCAInsert(?,?,?,?)";
        //preparar sentencia
        $stm = $conn->prepare($sql);
        //parametros de entrada
        $stm->bindParam(1, $oent->getId_marc(), PDO::PARAM_INT);
        $stm->bindParam(2, $oent->getNomb_marc(), PDO::PARAM_STR, 50);
        $stm->bindParam(3, $oent->getEsta_marc(), PDO::PARAM_INT);
        $stm->bindParam(4, $oent->getImag_marc(), PDO::PARAM_STR, 150);
        
        //ejecutar sentencia
        $stm->execute();
    }
}

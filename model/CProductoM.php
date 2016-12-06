<?php
//incluir la conexion
require_once '../config/AccesoDB.php';

class CProductoM
{ 
    public function ListAll()
    {
        $conn= AccesoDB::getConnectionPDO();
        $sql="call SP_TB_PRODUCTOSelectAll";
        //Ejecucion
        $stmt=$conn->query($sql);
        //Resultados
        $results=$stmt->fetchAll();
        //retorno
        return $results;
    }
    
    public function ListNews()
    {
        $conn= AccesoDB::getConnectionPDO();
        $sql="call SP_TB_PRODUCTOSelect4Last";
        //Ejecucion
        $stmt=$conn->query($sql);
        //Resultados
        $results=$stmt->fetchAll();
        //retorno
        return $results;
    }
    
    public function ListByIDSubcategoriaCuadricula($pIdSubcate) {
        //indicamos conexion
        $conn = AccesoDB::getConnectionPDO();
        //indicamos el nombre del SP
        $sql = "CALL SP_TB_PRODUCTOSelectByIDSubcategoria(?)";
        //preparar sentencia
        $stmt = $conn->prepare($sql);
        //parametros de entrada
        $stmt->bindParam(1, $pIdSubcate, PDO::PARAM_INT);
        //ejecutar sentencia
        $stmt->execute();
        //Resultados
        $rows_pro = $stmt->fetchAll();
        //recorrer las filas y formar la cadena de salida
        $salida = '';
        foreach ($rows_pro as $row_pro) {
            $salida.=' <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="'.$row_pro['imag_prod'].'" alt="'.$row_pro['nomb_prod'].'">
                                    <div class="caption">
                                    <center>
                                        <h4>'.$row_pro['nomb_prod'].'</h4><br/>
                                        <h3>S/. '.$row_pro['pven_prod'].'</h3><br/>
                                        <a href="#" class="btn btn-success" role="button">Detalles</a> 
                                        <a href="#" class="btn btn-default" role="button">Añadir</a>
                                    </center>    
                                    </div>
                                </div>
                            </div>';
        }

        //retorno
        return $salida;
    }
    public function ListByIDSubcategoriaLista($pIdSubcate) {
        //indicamos conexion
        $conn = AccesoDB::getConnectionPDO();
        //indicamos el nombre del SP
        $sql = "CALL SP_TB_PRODUCTOSelectByIDSubcategoria(?)";
        //preparar sentencia
        $stmt = $conn->prepare($sql);
        //parametros de entrada
        $stmt->bindParam(1, $pIdSubcate, PDO::PARAM_INT);
        //ejecutar sentencia
        $stmt->execute();
        //Resultados
        $rows_pro = $stmt->fetchAll();
        //recorrer las filas y formar la cadena de salida
        $salida = '';
        foreach ($rows_pro as $row_pro) {
            $salida.=' <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="'.$row_pro['imag_prod'].'" alt="'.$row_pro['nomb_prod'].'">
                                    <div class="caption">
                                    <center>
                                        <h4>'.$row_pro['nomb_prod'].'</h4><br/>
                                        <h3>S/. '.$row_pro['pven_prod'].'</h3><br/>
                                        <a href="#" class="btn btn-success" role="button">Detalles</a> 
                                        <a href="#" class="btn btn-default" role="button">Añadir</a>
                                    </center>    
                                    </div>
                                </div>
                            </div>';
        }

        //retorno
        return $salida;
    }
    
//    public function ListByIDCategoria($idCat)
//    {      
//       //indicamos conexion
//       $conn=  AccesoDB::getConnectionPDO();
//       //indicamos el nombre del SP
//       $sql="CALL SP_TB_CATEGORIAByIDCategoria(?)";
//       //preparar sentencia
//       $stmt=$cn->prepare($sql);
//       //parametros de entrada
//       $stmt->bindParam(1,$id,PDO::PARAM_INT);
//       //ejecutar sentencia
//       $stmt->execute();
//        //Resultados
//       $results=$stmt->fetchAll();
//        //retorno
//       return $results;       
//    }
    
    //funcion que recibe como parametro un objeto a partir 
    //de marcaE
//    public function Insert(marcaE $oent) {
//        //indicamos conexion
//        $cn = AccesoDB::getConnectionPDO();
//        //indicamos el nombre del SP
//        $sql = "CALL SP_TB_MARCAInsert(?,?,?)";
//        //preparar sentencia
//        $stm = $cn->prepare($sql);
//        //parametros de entrada
//        $stm->bindParam(1, $oent->getNomb_mar(), PDO::PARAM_STR, 50);
//        $stm->bindParam(2, $oent->getDesc_mar(), PDO::PARAM_STR);
//        $stm->bindParam(3, $oent->getImag_mar(), PDO::PARAM_STR, 150);
//        //ejecutar sentencia
//        $stm->execute();
//    }

}

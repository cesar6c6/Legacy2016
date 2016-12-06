<?php
require_once '../model/CProductoM.php';
class CProductoC
{
    public function ListarTodos()
    {
        $oMod=new CProductoM();
        return $oMod->ListAll();
    }
    public function ListarNuevos()
    {
        $oMod=new CProductoM();
        return $oMod->ListNews();
    }

    public function ListarxIDSubcategoriaCuadricula($idSub)
    {
        $oMod=new CProductoM();
        return $oMod->ListByIDSubcategoriaCuadricula($idSub);
    }
    public function ListarxIDSubcategoriaLista($idSub)
    {
        $oMod=new CProductoM();
        return $oMod->ListByIDSubcategoriaLista($idSub);
    }
}

//reconocer el dato enviado a este archivo y elige la 
//accion a realizar
if (isset($_REQUEST["accion"]))
{
    //crear un objeto a partir de esta clase
    $oProC=new CProductoC();
    //evaluamos el dato
    switch ($_REQUEST["accion"])
    {
//        case 'listar':
//            echo $oMarC->ListarFilas();
//            break;
//        case 'listarItemsMarca':
//            echo $oProC->ListarxIDMarca($_REQUEST["IdMarca"]);
//            break;
//        case 'listarRowsMarca':
//            echo $oProC->ListarxIDMarcaRows($_REQUEST["IdMarca"]);
//            break;
        case 'listarCuadricula':
            echo $oProC->ListarxIDSubcategoriaCuadricula($_REQUEST["IdSubcate"]);
            break;
        case 'listarLista':
            echo $oProC->ListarxIDSubcategoriaLista($_REQUEST["IdSubcate"]);
            break;
        
        case 'eliminar':
            break;
    }
}



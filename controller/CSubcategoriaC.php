<?php
require_once '../model/CSubcategoriaM.php';
class CSubcategoriaC {
   public function ListarxIDCategoria($pIDCat)
   {
       $omod=new CSubcategoriaM();
       return $omod->ListByIDCategoria($pIDCat);
   } 
   
   public function SeleccionarxIDSubCategoria($pIDSub)
   {
       $omod=new CSubcategoriaM();
       return $omod->SelectByIDSubCategoria($pIDSub);
   } 
}




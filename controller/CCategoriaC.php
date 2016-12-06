<?php
require_once '../model/CCategoriaM.php';
class CCategoriaC
{
    public function ListarTodos()
   {
       $omod=new CCategoriaM();
       return $omod->ListAll();      
   }
   
   public function SeleccionarxIDCategoria($pIDCat)
   {
       $omod=new CCategoriaM();
       return $omod->SelectByIDCategoria($pIDCat);
   } 
}





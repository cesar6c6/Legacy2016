<?php
require_once '../model/CSliderM.php';
class CSliderC
{
    public function ListarTodos()
    {
        $oMod=new CSliderM();
        return $oMod->ListAll();
    }

}



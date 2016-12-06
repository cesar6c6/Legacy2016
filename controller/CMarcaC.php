<?php
require_once '../model/CMarcaM.php';
require_once '../entitys/CMarcaE.php';

class CMarcaC {
    
   public function ListarTodos()
   {
       $omod=new CMarcaM();
       return $omod->ListAll();      
   }
   
   public function ListarFilas()
   {
       $omod=new CMarcaM();
       return $omod->ListRows();      
   }
   
   //CRUD
   
   public function Insertar(CMarcaE $oEnt)
   {
       $omod=new CMarcaM();
       return $omod->Insert($oEnt);  
   }
   
   //implementamos una funcion que lea los datos del formulario
    function leerDatosMarca()
    {
        $oent=new CMarcaE();//OBJETO
        $oent->setId_marc($_REQUEST["InputID"]);
        $oent->setNomb_marc($_REQUEST["InputNombre"]);
        //$oent->setImag_marc($_REQUEST["InputFile"]);
        //verificamos si existe una imagen
        if (isset($_FILES['InputFile']))
        {
            //obtener el nombre del archivo
            $name_pic=trim($_FILES['InputFile']['name']);
            //subir el archivo al servidor
            move_uploaded_file($_FILES['InputFile']['tmp_name'],'../images/marca/'.$name_pic);
            //asignamos a la Entidad
            $oent->setImag_marc('../images/marca/'.$name_pic);
        }
        else
        {
            if ($_REQUEST["Accion"]=='actualizar')
                $oent->setImag_marc($_REQUEST["InputFoto"]);
            else
               $oent->setImag_marc('../images/no-disponible.jpg'); 
        }
        if ($_REQUEST["InputEstado"]==1)
            $oent->setEsta_marc(1);  
        else
            $oent->setEsta_marc(0); 
        //RETORNAMOS
        return $oent;
    }
}

//reconocer el dato enviado a este archivo y elige la 
//accion a realizar
if (isset($_REQUEST["Accion"]))
{
    //crear un objeto a partir de esta clase
    $oMarcC=new CMarcaC();
    //evaluamos el dato
    switch ($_REQUEST["Accion"])
    {
//        case 'listar':
//            echo $oMarC->ListarFilas();
//            break;
//        case 'listarItems':
//            echo $oMarC->ListarItems();
//            break;
        case 'rows':
            echo $oMarcC->ListarFilas();
            break;
        case 'insertar':
            $oMarcC->Insertar($oMarcC->leerDatosMarca());
            break;
        case 'actualizar':
            break;
        case 'eliminar':
            break;
    }
}

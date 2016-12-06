<?php

//INCLUIMOS
require_once '../model/CManagamentM.php';

class CManagementC 
{
    function ValidarAdministrador($Log,$Pass)
    {
        //CREAMOS UN OBJETO APARTIR DE CSubcategoriaM
        $oM=new CManagamentM();
        return $oM->validateAdmin($Log, $Pass);
    }
    
    function verificarSesion()
    {
        session_start();
        if (isset($_SESSION["admi"])) 
            return true;
        else
            return false;
    }
    
    function cerrarSesion()
    {
        session_start();
        session_unset();
        session_destroy();
        //redireccionar
        header('Location: login.php');
    }
}

//Verificar los contenidos
if (isset($_POST["inputUsuario"]) and isset($_POST["inputPassword"])) //true
{
    //leemos los datos de las cajas de texto
    $inputLog=$_POST["inputUsuario"];
    $inputPas=$_POST["inputPassword"];    
    
    //creamos el objeto
    $oManC=new CManagementC();
    //Enviamos los datos y recepcionamos la respuesta en    
    $rowAdm= $oManC->ValidarAdministrador($inputLog, $inputPas);
    //Vemos la respuesta: contar el numero de filas
    $numReg=0; //contador
    $nombre='';
    //recorre si hay filas      
    foreach ($rowAdm as $row)
    {
        $nombre=$row["nomb_admi"]; //obtenemos el nombre del Administrador
        $numReg++;   
    }

    if ($numReg>0)
    {
        //iniciamos la Sesión con el nombre del Administrador
        session_start();
        $_SESSION["admi"] = $nombre; 
        //imprimir mensaje
        echo "OK";
    }
    else
    {
        echo "FAIL";
    }
}







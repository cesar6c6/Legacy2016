<?php
class AccesoDB
{
    //variable de tipo static
    private static $cnPDO=null;
    //metodo que devuelve la conexion hacia una DB MySql
    public static function getConnectionPDO()
    {
        if (self::$cnPDO==null)
        {
            try
            {
                //parametros de conexion: servidor, nombre de base de datos 
                $param='mysql:dbname=db_legacy;host=localhost';
                $user='root';   //usuario
                $pass='';       //password
                //creamos la instancia de PDO
                $cnPDO=new PDO($param,$user,$pass);
                //propiedades de PDO
                $cnPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $cnPDO->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
                $cnPDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            }
            catch (PDOException $e)
            {
                echo 'Error: '.$e->getMessage();
            }
            return $cnPDO;
        }
    }
}
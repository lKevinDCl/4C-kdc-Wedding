<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3308;dbname=bd_kdc_4c_wedding", "soporte3c", "soporte3c");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>
<?php

class Conexion
{
    static public function Conectar()
    {
        $host = 'localhost';
        $port = '5432';
        $db = 'guarderia';
        $user = 'postgres';
        $pass = '0623';
        
        try {
          $conn = new PDO("pgsql:host=$host; dbname=$db", $user, $pass);


        } catch (PDOException $exp) {
        }

        return $conn;
      
      
    }
}
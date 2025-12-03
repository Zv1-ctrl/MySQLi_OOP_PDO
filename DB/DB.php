<?php

class DB{

    private static ?DB $instance = null;

    public ?PDO $connpdo;

    private function __construct()  {

        $dsn = "mysql:host=localhost;dbname=WebTrgovina;charset=utf8";
        $user = "web01";
        $pass = "12345";

        try{
            $this->connpdo = new PDO($dsn, $user, $pass, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ));
        }
        catch (PDOException $e) 
        {
            die("Connection failed: " . $e->getMessage());
        }
    }

}

?>
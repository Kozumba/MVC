<?php
class Config{
private $dbname = "mysql:host=localhost;dbname=test;charset=utf8";
private $username = "root";
private $password = "";

protected function sendConfig(){
        try{
        $db = new PDO ($this->dbname, $this->username, $this->password);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
        }
        catch (PDOEXCEPTION $error){
                $error->getMessage(); 
        } 
}
}
?>
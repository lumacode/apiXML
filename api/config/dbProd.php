<?php 

class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'luisalba_apitech', 'Luis@7801', 'luisalba_apitech');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
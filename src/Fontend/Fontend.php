<?php

namespace rudhro\Fontend;
use rudhro\Helper;
class Fontend{

public function __construct(){
    session_start();
}

public function category(){
    // database connection
    $db = new Helper;
    $db->dbconnection();
    // sql connection
    $sql = "SELECT * FROM categorylists";
    // prepare database to sql
    $stmt = $db->prearesql($sql);
    $result = $stmt->execute();
    if($result){
        $data = $stmt->fetchAll();
        return $data;
    }
}

}




?>
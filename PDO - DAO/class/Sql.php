<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }

    private function setParams($statment, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($key, $value);

        }

    }

    private function setParam($statment, $key, $value){

        $statment->bindParam($key, $value);

    }

    public function PDO($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array
    {

        $stmt = $this->PDO($rawQuery, $params);
        //return  stream_context_set_option(|)($stmt->fetchAll(PDO::FETCH_ASSOC)); 
       return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>
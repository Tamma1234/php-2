<?php
class DBConnect{
    function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
                    "root", "");
    }

    function executeQuery($query, $getAll = true){
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if($getAll){
            $result = $stmt->fetchAll();
        }else{
            $result = $stmt->fetch();
        }
        return $result;
    }
}

?>

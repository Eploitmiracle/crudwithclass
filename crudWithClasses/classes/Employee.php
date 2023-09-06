<?php

class Employee{
    public function selectAllEmployees(){
        include "config/db_connect.php";
        $sql = "SELECT * FROM employees";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function selectByFirstNameAndageWhoAreTecher(){
        include "config/db_connect.php";
        $sql = "SELECT firstName, age FROM employees WHERE occupation='Teacher'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}

?>
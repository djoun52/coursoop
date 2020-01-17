<?php


require_once "../db/db_connect.php";

class ReponseDAO extends DbConnect 
{

    public function __construct()
    {
        parent::connect();
    }

    public function getAllReponses()
    {
        $sql = "SELECT * FROM reponses";
        $result = parent::executeQuery($sql);
        return $result->fetchAll();

    }
}
<?php


require_once "../db/db_connect.php";

class QuestionDAO extends DbConnect 
{

    public function __construct()
    {
        parent::connect();
    }

    public function getAllQuestions()
    {
        $sql = "SELECT * FROM questions";
        $result = parent::executeQuery($sql);
        return $result->fetchAll();

    }
    public function getQuestionsByCategorie($paramCategorie)
    {
        $sql = "SELECT * FROM questions WHERE categorie = :paramcategorie";
        $params = array(
            "paramcategorie" => $paramCategorie
        );
        $result = parent::executeQuery($sql,$params);
        return $result->fetchAll();

    }
}
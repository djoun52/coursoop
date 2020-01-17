<?php

require_once "hydrate.class.php";

class Reponse extends Entity
{

    public $id;
    public $reponse;
    public $idQuestion;
    public $justeFaux;

    function __construct($data)
    {
        parent::hydrate($data); 
    }

    public function getId()
    {
        return $this->id;
    }
    public function getReponse()
    {
        return $this->reponse;
    }
    public function getJustefaux()
    {
        return $this->justeFaux;
    }
    public function getIdquestion()
    {
        return $this->id_question;
    }

    public function setId($n)
    {
        $this->id = $n;
    }
    public function setReponse($n)
    {
        $this->reponse = $n;
    }
    public function setJusteFaux($n)
    {
        $this->justeFaux = $n;
    }
    public function setIdQuestion($n)
    {
        $this->idQuestion = $n;
    }
}
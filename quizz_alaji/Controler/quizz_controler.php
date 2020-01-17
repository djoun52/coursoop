<?php

require_once '../Modele/question.class.php';
require_once '../Modele/question.classDAO.php';

$questionDAO = new QuestionDAO();
$arrQuestions = $questionDAO->getAllQuestions();

// var_dump($a);

foreach ($arrQuestions as $key => $value) {
    // var_dump($key);
    // var_dump($value);
    $questions[] =new questions($value);
}

var_dump($questions);
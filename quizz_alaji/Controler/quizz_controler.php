<?php

require_once '../Modele/question.class.php';
require_once '../Modele/question.classDAO.php';

require_once '../Modele/reponse.class.php';
require_once '../Modele/reponse.classDAO.php';


$questionDAO = new QuestionDAO();
$arrQuestions = $questionDAO->getAllQuestions();
$responseDAO = new ReponseDAO();
$arrReponses = $responseDAO->getallReponses();
// var_dump($a);

foreach ($arrQuestions as $key => $value) {
    // var_dump($key);
    // var_dump($value);
    $questions[] = new questions($value);
}
foreach ($arrReponses as $key => $value) {
    // var_dump($key);
    // var_dump($value);
    $reponse[] = new Reponse($value);
}
foreach ($questions as $key => $value) {
    echo '<h1>' . $value->getQuestion() . '</h1>';
    echo '<h3> categorie : ' . $value->getCategorie() . '</h3>';
}
// var_dump($questions);
foreach ($reponse as $key => $value) {
    echo '<h3>' . $value->getReponse() . '</h3>';
}
// var_dump($reponse);

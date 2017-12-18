<?php

session_start();

$_SESSION['prenom'];

$prenom = $_SESSION['prenom'];

$prenom = strtoupper($prenom);

require_once 'Modele/quizz.php';

require_once 'Class/Connection.php';

require_once 'Class/Question.php';

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];
}

$bdd = Connection::getConnection();

$question = new Question();

$questions = $question->getQst($bdd, $quizzId);

$all = $question->getQuestions($bdd, $quizzId);


$lastQuestionId = -5;
$i = 0;

require_once 'Vue/lesQuizzVue.php';

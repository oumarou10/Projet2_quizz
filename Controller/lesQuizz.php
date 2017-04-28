<?php

require_once 'Modele/quizz.php';

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];
}

$questions = getQst($quizzId);

$lastQuestionId = -5;
$i = 0;

require_once 'Vue/lesQuizz.php';

<?php

require_once 'Modele/quizz.php';

$questions = getQst($_GET['id']);

$nbQst = $questions[0]['nbQst'];

$getReponses = getReponses($_GET['id']);

require_once 'Vue/lesQuizz.php';

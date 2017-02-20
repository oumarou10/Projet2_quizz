<?php

require_once 'Modele/quizz.php';

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];
}

$getGoodAns = getBonnesReponses($quizzId);

$nbQst = getNbQst($quizzId);

$resultatQuizz = 0;

require_once 'Vue/traitement.php';

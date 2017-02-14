<?php

require_once 'Modele/quizz.php';

$getGoodAns = getBonnesReponses($_GET['quizz_id']);


    $afficherReponse = afficherReponses();


require_once 'Vue/traitement.php';
<?php

require_once 'Modele/quizz.php';

$getGoodAns = getBonnesReponses($_GET['quizz_id']);

var_dump($_POST);

require_once 'Vue/traitement.php';

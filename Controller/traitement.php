<?php

require_once 'Modele/quizz.php';

$getGoodAns = getBonnesReponses($_GET['quizz_id']);

require_once 'Vue/traitement.php';
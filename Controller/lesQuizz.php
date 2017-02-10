<?php

require_once 'Modele/quizz.php';

$questions = getQst($_GET['id']);

require_once 'Vue/lesQuizz.php';

<?php

require_once 'Modele/quizz.php';

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];
}

$getGoodAns = getBonnesReponses($quizzId);

$nbQst = getNbQst($quizzId);

$resultatQuizz = 0;

/*if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    for ($i=0;$i < $nbQst; $i++){
        if (in_array($_POST['question'.$i],$getGoodAns['reponse']) ){
            $resultatQuizz++;
        }

        else{
            $resultatQuizz--;
        }
    }
}*/

require_once 'Vue/traitement.php';

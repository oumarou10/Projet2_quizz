<?php

require_once 'Modele/quizz.php';

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];

    $getGoodAns = getBonnesReponses($quizzId);

    $nbQst = getNbQst($quizzId);

}

$errors = []; // On crée un tableau vide qui contiendra les erreurs

for ($i = 1; $i <= $nbQst;$i++)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (empty($_POST['question'.$i]))
        {
            $errors[] = 'La question ' .$i. ' na pas été cochée';
        }
    }
}
$reponsesSaisies = [];
$reponsesSaisies = $_POST;

$resultatQuizz = 0;

require_once 'Vue/traitement.php';
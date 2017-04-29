<?php

session_start();

$prenom = $_SESSION['prenom'];

require_once 'Modele/quizz.php';


if (isset($_GET['id']))
{
    $quizzId = (int) $_GET['id'];

    $getGoodAns = getBonnesReponses($quizzId);

    $nbQst = getNbQst($quizzId);

    $questions = getQst($quizzId);

    $lastQId = -20;

}

$errors = []; // On crée un tableau vide qui contiendra les erreurs

for ($i = 1; $i <= $nbQst;$i++)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (empty($_POST['question'.$i]))
        {
            $errors[] = "La question ' .$i. ' n'a pas été cochée";
        }

    }
}



$resultatQuizz = 0;

$reponsesSaisies = [];
$reponsesSaisies = $_POST;
$j = 1;

for ($i = 0; $i <= $nbQst;$i++)
{

    if (isset($_POST['question'.$j]))
    {
        if(is_array($reponsesSaisies['question'.$j]))
        {
            $reponsesSaisies['question'.$j] = implode(' ', $reponsesSaisies['question'.$j]);
        }

        if (is_string($reponsesSaisies['question'.$j]))
        {
            $reponsesSaisies['question'.$j] = ucwords(strtolower(trim($reponsesSaisies['question'.$j])));
        }
        if ($reponsesSaisies['question' . $j] == $getGoodAns[$i]['reponse'])
        {
            $resultatQuizz++;
        }

    }
    $j++;
}

$average = ($resultatQuizz / $nbQst) * 100;

if (empty($errors) && isset($average))
{
  //  sendResultat($prenom,$average,$quizzId);
}

$j = 1;
$i = 0;

require_once 'Vue/traitement.php';

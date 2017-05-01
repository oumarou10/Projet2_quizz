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

$countHistory = countHistory($prenom,$quizzId);

$nbHistory = $countHistory[0]['nbHistory'];

if (empty($errors) && isset($average))
{
    $showHistory = showHistory($prenom,$quizzId);
    sendResultat($prenom,$average,$quizzId);
}

if ($nbHistory == 0)
{
    $showHistory = "Tu n'as pas encore d'historique </br>";
}

else
{
    $showHistory = 'Voici ton historique de points sur ce quizz: '.$showHistory[0]['resultat'].'</br>';
}

$j = 1;
$i = 0;

require_once 'Vue/traitement.php';

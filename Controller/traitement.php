<?php

require_once 'Modele/quizz.php';

$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];

    $getGoodAns = getBonnesReponses($quizzId);

    $nbQst = getNbQst($quizzId);

    $questions = getQst($quizzId);

}

$verif = verifIp($ip,$quizzId);


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

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (empty($errors))
    {
         if ( $verif[0]['id'] == 0)
         {
            sendIp($ip,$quizzId);
         }
        else
         {
             echo '<h1><font color="red"> Tu as déjà répondu à ce quizz avec cet ip: ' . $ip .' </font> </h1></br></br>';
             die();
        }
    }

}

$reponsesSaisies = [];
$reponsesSaisies = $_POST;

$resultatQuizz = 0;

require_once 'Vue/traitement.php';

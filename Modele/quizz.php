<?php

require 'connexion.php';

function getQuizz()
{
    global $bdd;

    $requete = $bdd->query('SELECT * FROM quizz');

    $allQuizz = $requete->fetchAll();

    return $allQuizz;
}

$id = $_GET['id'];

$req2 = $bdd->prepare('SELECT * FROM questions AS q INNER JOIN reponses AS r ON q.id = r.questions_id WHERE q.quizz_id = :id');
$req2->bindParam(':id', $id , PDO::PARAM_INT);
$req2->execute();

$donnees = $req2->fetchAll();

?>
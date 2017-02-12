<?php

require 'connexion.php';

function getQuizz()
{
    global $bdd;

    $requete = $bdd->query('SELECT * FROM quizz'); //

    $allQuizz = $requete->fetchAll();

    return $allQuizz;
}

function getQst($id){
    global $bdd;

    $req2 = $bdd->prepare('SELECT * FROM questions AS q INNER JOIN reponses AS r ON q.id = r.questions_id WHERE q.quizz_id = :id');
    $req2->bindParam(':id', $id , PDO::PARAM_INT);
    $req2->execute();

    $questions = $req2->fetchAll();

    return $questions;

}

function getBonnesReponses($id){
    global $bdd;

    $req3 = $bdd->prepare('SELECT * FROM reponses AS r INNER JOIN questions AS q ON r.questions_id = q.id INNER JOIN quizz ON quizz.id = q.quizz_id WHERE type = 1 AND quizz.id = :id ');
    $req3->bindParam(':id', $id, PDO::PARAM_INT);
    $req3->execute();

    $getGoodAns = $req3->fetchAll();
    return $getGoodAns;

    if (isset($_GET['envoyer'])){

    }
}


?>
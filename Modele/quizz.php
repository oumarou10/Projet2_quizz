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

    $req2 = $bdd->prepare('SELECT * , (SELECT COUNT(DISTINCT questions.id) FROM questions WHERE questions.quizz_id = :id) AS nbQst FROM questions AS q INNER JOIN reponses AS r ON q.id = r.questions_id WHERE q.quizz_id = :id');
    $req2->bindParam(':id', $id , PDO::PARAM_INT);
    $req2->bindParam(':id', $id , PDO::PARAM_INT);
    $req2->execute();

    $questions = $req2->fetchAll();

    return $questions;
}

function getReponses($id){
    global $bdd;

    $req3 = $bdd->prepare('SELECT r.reponse, q.quizz_id FROM reponses AS r INNER JOIN questions AS q ON r.questions_id = q.id INNER JOIN quizz ON quizz.id = q.quizz_id WHERE quizz.id = :id ');
    $req3->bindParam(':id', $id, PDO::PARAM_INT);
    $req3->execute();

    $getReponses = $req3->fetchAll();
    return $getReponses;

}


function getBonnesReponses($id){
    global $bdd;

    $req3 = $bdd->prepare('SELECT * FROM reponses AS r INNER JOIN questions AS q ON r.questions_id = q.id INNER JOIN quizz ON quizz.id = q.quizz_id WHERE type = 1 AND quizz.id = :id ');
    $req3->bindParam(':id', $id, PDO::PARAM_INT);
    $req3->execute();

    $getGoodAns = $req3->fetchAll();

    return $getGoodAns;

}
function afficherReponses(){

    for ($i = 0 ; $i < 5 ; $i++){
        if (isset($_POST['envoyer'])){
            echo $_POST['question$i'];
        }

    }
}
?>
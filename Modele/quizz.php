<?php

require 'connexion.php';

function getQuizz() {
    global $bdd;

    $requete = $bdd->query('SELECT * FROM quizz');

    $allQuizz = $requete->fetchAll();

    return $allQuizz;
}

function getQst($id) {
    global $bdd;

    $req2 = $bdd->prepare(
        'SELECT * FROM questions q INNER JOIN reponses r ON q.question_id = r.questions_id WHERE q.quizz_id = :id'
    );
    $req2->bindParam(':id', $id, PDO::PARAM_INT);
    $req2->execute();

    $questions = $req2->fetchAll();

    return $questions;
}

function getReponses($id) {
    global $bdd;

    $req3 = $bdd->prepare(
        'SELECT r.reponse_id, r.reponse, q.quizz_id
        FROM reponses r 
        INNER JOIN questions q ON r.questions_id = q.question_id 
        INNER JOIN quizz ON quizz.quizz_id = q.quizz_id 
        WHERE type = 1 AND q.quizz_id = :id'
    );
    $req3->bindParam(':id', $id, PDO::PARAM_INT);
    $req3->execute();

    $getReponses = $req3->fetchAll();

    return $getReponses;

}

function getNbQst($id){
    global $bdd;

    $req = $bdd->prepare(
        'SELECT COUNT(question) AS nbQst FROM questions WHERE quizz_id = :id'
    );
    $req->bindParam(':id', $id,PDO::PARAM_INT);
    $req->execute();

    $nbQst = $req->fetch();

    return $nbQst['nbQst'];
}


function getBonnesReponses($id) {
    global $bdd;

    $req = $bdd->prepare(
        'SELECT reponse 
         FROM reponses AS r 
         INNER JOIN questions AS q ON r.questions_id = q.question_id 
         INNER JOIN quizz ON quizz.quizz_id = q.quizz_id 
         WHERE type = 1 AND quizz.quizz_id = :id '
    );
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $getGoodAns = $req->fetchAll();

    return $getGoodAns;

}
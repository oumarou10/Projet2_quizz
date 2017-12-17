<?php

require_once 'Class/Connection.php';

$bdd = Connection::getConnection();

function getQst($id) {
    global $bdd;

    $req2 = $bdd->prepare(
        'SELECT * FROM questions q 
          INNER JOIN reponses r ON q.question_id = r.questions_id   
          WHERE q.quizz_id = :id'
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
        'SELECT COUNT(question) nbQst FROM questions WHERE quizz_id = :id'
    );
    $req->bindParam(':id', $id,PDO::PARAM_INT);
    $req->execute();

    $nbQst = $req->fetch();

    return $nbQst['nbQst'];
}


function getBonnesReponses($id) {
    global $bdd;

    $req = $bdd->prepare(
        'SELECT GROUP_CONCAT(reponse SEPARATOR " ") AS reponse
         FROM reponses AS r 
         INNER JOIN questions AS q ON r.questions_id = q.question_id 
         INNER JOIN quizz ON quizz.quizz_id = q.quizz_id 
         WHERE type = 1 AND quizz.quizz_id = :id 
         group by q.question_id'
    );
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $getGoodAns = $req->fetchAll();

    return $getGoodAns;

}

function sendResultat($pseudo,$resultat,$id) {
    global $bdd;

    $req = $bdd->prepare(
        'INSERT INTO user (pseudo, resultats, quizz_id) VALUES (:pseudo,:resultat,:quizz_id)');
        $req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $req->bindParam(':resultat', $resultat, PDO::PARAM_INT);
        $req->bindParam(':quizz_id', $id, PDO::PARAM_INT);
        $req->execute();

        return $req;

}

function showHistory($pseudo,$id)
{
    global $bdd;

    $req = $bdd->prepare(
        'SELECT GROUP_CONCAT(resultats SEPARATOR " ") AS resultat
         FROM user
         INNER JOIN quizz on user.quizz_id = quizz.quizz_id
         WHERE pseudo = :pseudo
         AND user.quizz_id = :id'
    );
    $req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $history = $req->fetchAll();

    return $history;
}

function countHistory($pseudo,$id)
{
    global $bdd;

    $req = $bdd->prepare(
        'SELECT COUNT(*) AS nbHistory
         FROM user
         INNER JOIN quizz ON user.quizz_id = quizz.quizz_id
         WHERE user.pseudo = :pseudo 
         AND user.quizz_id = :id'
    );
    $req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $nbHistory = $req->fetchAll();

    return $nbHistory;

}


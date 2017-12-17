<?php
/**
 * Created by PhpStorm.
 * User: oumarucho
 * Date: 17/12/2017
 * Time: 04:05
 */

class Reponse
{
    private $reponse_id;
    private $reponse;
    private $type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->reponse_id;
    }

    /**
     * @param mixed $id
     * @return Reponse
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     * @return Reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return Reponse
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getReponses($bdd, $id) {

    $req3 = $bdd->prepare(
        'SELECT r.reponse_id, r.reponse, q.quizz_id
        FROM reponses r 
        INNER JOIN questions q ON r.questions_id = q.question_id 
        INNER JOIN quizz ON quizz.quizz_id = q.quizz_id 
        WHERE type = 1 AND q.quizz_id = :id'
    );
    $req3->bindParam(':id', $id, PDO::PARAM_INT);
    $req3->execute();

    $getReponses = $req3->fetchAll(PDO::FETCH_CLASS, 'Reponse');

    return $getReponses;

    }

}
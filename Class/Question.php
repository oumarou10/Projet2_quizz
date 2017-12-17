<?php
/**
 * Created by PhpStorm.
 * User: oumarucho
 * Date: 17/12/2017
 * Time: 03:34
 */

class Question
{
    private $question_id;
    private $question;
    private $question_type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->question_id;
    }

    /**
     * @param mixed $id
     * @return Question
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestiontype()
    {
        return $this->question_type;
    }

    /**
     * @param mixed $questiontype
     * @return Question
     */
    public function setQuestiontype($questiontype)
    {
        $this->questiontype = $question_type;
        return $this;
    }

    public function getQst($bdd, $id) {

         $req2 = $bdd->prepare(
            'SELECT * FROM questions q 
              INNER JOIN reponses r ON q.question_id = r.questions_id   
              WHERE q.quizz_id = :id'
        );
        $req2->bindParam(':id', $id, PDO::PARAM_INT);
        $req2->execute();

        $questions = $req2->fetchAll(PDO::FETCH_CLASS, 'Question');

        return $questions;
    }

    public function getQuestions($bdd, $id) {
        $req = $bdd->prepare('SELECT * FROM questions WHERE quizz_id = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();

        $questions = $req->fetchAll(PDO::FETCH_CLASS, 'Question');

        return $questions;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: oumarucho
 * Date: 17/12/2017
 * Time: 02:33
 */

class Quizz
{
    private $id;

    private $titre;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getAll($bdd){

        $requete = $bdd->query('SELECT * FROM quizz');

        $allQuizz = $requete->fetchAll(PDO::FETCH_CLASS , 'Quizz');

        return $allQuizz;
    }


}
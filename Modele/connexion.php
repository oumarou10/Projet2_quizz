<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
    }
    catch (Exception $e)
    {
         die('Erreur de connexion à la BDD : ' . $e->getMessage());
    }

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

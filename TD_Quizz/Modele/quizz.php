<?php

require 'connexion.php';

	function takeQuestions() // je crée une fonction qui récupère toutes les donnees
	{
		global $bdd;
		
		$req = $bdd->query('SELECT * FROM questions');
		$donnees = $req->fetchAll();

		return $donnees;
	}

	

	$req1 = $bdd->query('SELECT COUNT(id) FROM questions'); // cette requete permet de recuperer le nom d'ID

?>


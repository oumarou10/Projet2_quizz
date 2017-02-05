<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quizz Projet</title>
</head>

<body>

	<h1>Bonjour et bienvenue sur mon quizz! </h1>

	<p> Ceci est mon premier quizz alors <mark>soyez indulgents</mark> s'il vous plaît,j'apprends comment cela marche.</p>

	<form action="index.php"    method="post">
    
 <?php

    $donnees = takeQuestions(); // cette fonction que je me dans une variable contient toutes les questions

    foreach ($donnees as $donnees) 
    {
    	for ($i=0; $i < count($req1) ; $i++) 
    	{ 
    		echo $i . ' ) '. $donnees['question']. '<br>';
    	}
    }

 ?>

    <input  type="submit" value="envoyer">
</form>
</body>
</html>
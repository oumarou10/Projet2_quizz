<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quizz Projet</title>
</head>



<body>

	<h1>Bonjour et bienvenue sur mon quizz! </h1>

	<p> Ceci est mon premier quizz alors <mark>soyez indulgents</mark> s'il vous plaît,j'apprends comment cela marche.</p>

 <?php

  foreach ($allQuiz as $allQuiz)
  {
   ?>
   		<div>
			<? echo $allQuiz['titre']; ?> <a href="?lieu=lesQuizz&&id=<?echo$allQuiz['id'];?><br>"> ici </a>
		</div>

  <?php
    }
 ?>

</form>
</body>
</html>
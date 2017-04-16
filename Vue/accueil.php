<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quizz Projet</title>
</head>

<body>

    <div id="wrapper" style="text-align: center;background-color: aliceblue;border-radius: 20%">


	<h1 style="text-align: center">Bonjour et bienvenue sur mon quizz! </h1>

	<p> Ceci est mon premier quizz alors <mark>soyez indulgents</mark> s'il vous plaît,j'apprends comment cela marche. <?= 'oici ton adresse IP:'.$_SERVER['REMOTE_ADDR'];?></p>

 <?php


  foreach ($allQuiz as $quiz)
  {
   ?>
      <div>
          <h2><?= $quiz['titre']; ?> <a href="?action=lesQuizz&&id=<?= $quiz['quizz_id']; ?>"> ici </a> </h2>
      </div>

  <?php
    }
 ?>

        <footer style="background:darkred;">

            <p style="color: aliceblue;"> Copyright © 2017. Tous droits réservés. </p>

        </footer>

    </div>

</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Quizz Projet</title>
</head>

<body>

    <div class="container" style="background-color:aliceblue;border-radius: 10%; margin:13% auto; text-align: center";>
        
        <div class="col-lg-12">
            <h1 style="text-align: center">Bonjour <?=$prenom?> et bienvenue sur mon quizz! </h1>
        </div>
        
      <?php foreach ($allQuiz as $quiz):?>
          <div class="col-lg-4 col-md-6 col-xs-12">
              
                <h2><?= $quiz['titre']; ?> </h2>
                <p><a class="btn btn-link" href="?action=lesQuizz&&id=<?= $quiz['quizz_id']; ?>"> ici </a></p>
              
          </div>
      <?php endforeach;?>
        
    </div>

</body>
</html>

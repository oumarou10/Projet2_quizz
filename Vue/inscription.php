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

    <div class="container" style="text-align: center;background-color: aliceblue;border-radius: 10%; margin:18% auto;padding:30">

        <div class="col-lg-12">
	       <h1 style="text-align: center">Bonjour et bienvenue sur mon quizz! </h1>
        </div>

        <div>

            <form action="?action=accueil" class="form-group" method="POST">
                
                    <div class="form-group" >
                        <label> Votre Prénom :</label>
                        <input type="text" name="prenom" class="form-control btn-xs-12" id="prenom">
                    </div>
                   
                    <div class="form-group">
                        <button type="submit" class = "btn btn-default btn-xs-12" name="envoyer"> Let's go </button>
                    </div>
               
            </form>

        </div>

        <footer style="background:darkred;">

            <p style="color: aliceblue;"> Copyright © 2017. Tous droits réservés. </p>

        </footer>

    </div>

</body>
</html>

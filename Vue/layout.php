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

    <div class="container" style="height: 610px">

        <header style="background: beige; border-radius: 15px;">

            <div id="conteneur"  style="padding-top: 20px; display: flex; justify-content: space-around">

                <div id="image" style="/*margin: 0px 30px; padding: 20px">
                    <img src="https://www.quizz.biz/uploads/quizz/713631/orig/1.jpg?1479715536" width="120px" height="100px">
                </div>

                <div id="text_presentation" style="padding-top: 60px">
                    <h4> Venez vous divertir sur des quizz divers et variés</h4>
                </div>

            </div>

            <hr style="border: 0; height: 0; box-shadow: 0 0 2px 1px black;">

        </header>

        <?= $contenu ?>

    </div>

    <footer style="background:grey; height: 160px; text-align: center; padding-top: 50px">

            <p style="color: aliceblue;"> Copyright © 2017. Tous droits réservés. </p>

    </footer>

</body>
</html>

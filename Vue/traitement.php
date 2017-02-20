<!DOCTPE html>
<html>
    <head>
        <title> Reponses </title>
    </head>
    <body>
        <h1>Voici les bonnes réponses</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        for ($i = 1; $i <= $nbQst;$i++){
            if(isset($_POST['question'.$i])){
                echo 'ta reponse est '. $_POST['question'.$i];
            }
        }
    }
    var_dump($questions);
    ?>

    </body>
</html>

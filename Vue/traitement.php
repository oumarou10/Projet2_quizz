<!DOCTPE html>
<html>
    <head>
        <title> Reponses </title>
    </head>
    <body>
        <h1>Voici les bonnes réponses</h1>

    <?php

    for ($i = 1; $i <= $nbQst;$i++){
        if (isset($_POST['envoyer'])){
            if (!empty($_POST['question'.$i])){
                $reponse.$i = $_POST['question'.$i];
                echo $reponse.$i;
             }
        }
    }

    echo $_POST['question1'];

    ?>

    </body>
</html>

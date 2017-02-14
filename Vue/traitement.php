<!DOCTPE html>
<html>
<head>
    <title> Reponses </title>
</head>
<body>
    <h1>Voici les bonnes réponses</h1>

    <?php
    foreach ($getGoodAns as $goodRep)
    {
        echo $goodRep['reponse'] .'</br>';
    }

    print $afficherReponse;
    ?>
</body>
</html>
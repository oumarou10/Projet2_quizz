<!DOCTPE html>
<html>
    <head>
        <title> Reponses </title>
    </head>
    <body>
        <h1>Voici les bonnes réponses</h1>

    <?php foreach ($questions as $question)
    {
       if ($lastQId != $question['question_id'])
        {
            echo '<strong>'. $j .')'. $question['question'] .'</strong> </br></br>';
            if (isset($reponsesSaisies['question' . $j]))
            {
                if ($reponsesSaisies['question' . $j] == $getGoodAns[$i]['reponse'])
                {
                    echo '<font color="green"> Tu as bien répondu : ' . $reponsesSaisies['question' . $j] . ' </font> </br></br>';
                    $resultatQuizz++;
                }

                 else if (empty($reponsesSaisies['question' . $j]))
                {
                    echo  '<font color="red">Tu as laissé le champs vide </font> </br></br>';
                    echo 'La bonne réponse est :'. $getGoodAns[$i]['reponse'].'</br></br>';
                }

                else
                {
                    echo  '<font color="red">Tu as répondu : ' . $reponsesSaisies['question' . $j] . '</font> </br></br>';
                    echo 'La bonne réponse est :'. $getGoodAns[$i]['reponse'].'</br></br>';
                }

            }
            else
            {
                echo "Tu n'as coché de cases'. '</br></br>";
            }
            $j++;
            $i++;
        }

        $lastQId = $question['question_id'];
    }

    ?>

    <h3> Ton score est de <?=ceil($average)?> %</h3>

    <h3> Tes scores précédents <?= $showHistory ?> %</h3>

    <?= 'revenir à la page d\'accueil <a href="?action=accueil&&prenom=<?=$prenom;?>">ici</a>';?>

    </body>
</html>
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
                if(is_array($reponsesSaisies['question'.$j]))
                {
                    $reponsesSaisies['question'.$j] = implode(',', $reponsesSaisies['question'.$j]);
                }
                if ($reponsesSaisies['question' . $j] == $getGoodAns[$i]['reponse'])
                {
                    echo '<font color="green"> Tu as bien répondu : ' . $reponsesSaisies['question' . $j] . ' </font> </br></br>';
                    $resultatQuizz++;
                }
                else
                {
                    echo  '<font color="red">Tu as répondu : ' . $reponsesSaisies['question' . $j] . '</font> </br></br>';
                    echo 'La bonne réponse est :'. $getGoodAns[$i]['reponse'].'</br></br>';
                }

            }
            else
            {
                echo 'Tu n\'as pas saisi de réponse'. '</br></br>';
            }
            $j++;
            $i++;
        }

        $lastQId = $question['question_id'];
    }
    $average = ($resultatQuizz / $nbQst) * 100;

    ?>


    <h3> Ton score est de <?=ceil($average)?> %</h3>

    <?= 'revenir à la page d\'accueil <a href="?action=accueil">ici</a>';?>

    </body>
</html>
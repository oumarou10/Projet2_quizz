<!DOCTPE html>
<html>
    <head>
        <title> Reponses </title>
    </head>
    <body>
        <h1>Voici les bonnes réponses</h1>

    <?php

    for ($i = 0;$i < sizeof($getGoodAns);$i++)
    {
        $j = $i + 1;
        if (isset($getGoodAns[$i]['reponse']) AND isset($reponsesSaisies['question'.$j]))
        {
            if(is_array($reponsesSaisies['question'.$j]))
            {
                $reponsesSaisies['question'.$j] = implode(",", $reponsesSaisies['question'.$j]);
            }
            if ($getGoodAns[$i]['reponse'] == $reponsesSaisies['question'.$j])
            {
                $resultatQuizz++;
            }
        }
    }
    $average = ($resultatQuizz / $nbQst) * 100;

    $j = 1;
    $i = 0;
    $lastQId = -20;
    foreach ($questions as $question)
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

                }
                else
                {
                    echo  '<font color="red">Tu as mal répondu : ' . $reponsesSaisies['question' . $j] . '</font> </br></br>';
                    echo 'La bonne réponse est :'. $getGoodAns[$i]['reponse'].'</br></br>';
                }

            }
            else
            {
                echo 'Tu nas pas saisi de réponse'. '</br></br>';
            }
            $j++;
            $i++;
        }

        $lastQId = $question['question_id'];
    }

    ?>


    <h3> Ton score est de <?=ceil($average)?> %</h3>
    </body>
</html>
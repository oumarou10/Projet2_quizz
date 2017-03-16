<!DOCTPE html>
<html>
    <head>
        <title> Reponses </title>
    </head>
    <body>
        <h1>Voici les bonnes réponses</h1>

    <?php

   /* if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (!empty($errors))
        {
            foreach ($errors as $error)
            {
                echo $error . '</br>';
            }
            for ($i = 1; $i <= $nbQst;$i++)
            {
                if (isset($_POST['question' . $i]))
                {
                    echo ' Ta reponse à la question '.$i.' est : ' . $_POST['question' . $i] . '</br></br>';
                }
            }
        }
        else
        {
            for ($i = 1; $i <= $nbQst;$i++)
            {
                if (isset($_POST['question' . $i]))
                {
                    echo ' Ta reponse à la question '.$i.' est : ' . $_POST['question' . $i] . '</br>';
                }
            }
        }
    }*/

    for ($i = 0;$i < sizeof($getGoodAns);$i++)
    {
        $j = $i + 1;
        if (isset($getGoodAns[$i]['reponse']) AND isset($reponsesSaisies['question'.$j]))
        {
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
            echo $j .')'. $question['question'] .'</br></br>';
            if (isset($_POST['question' . $j]) AND isset($reponsesSaisies['question' . $j]))
            {
                if ($reponsesSaisies['question' . $j] == $getGoodAns[$i]['reponse'])
                {
                    echo 'Tu as bien répondu : ' . $reponsesSaisies['question' . $j] . ' cest une bonne reponse </br></br>';
                }
                else
                {
                    echo  'Tu as mal répondu : ' . $reponsesSaisies['question' . $j] . '</br></br>';
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


    <h4> Ton score est de <?=ceil($average)?> %</h4>
    </body>
</html>
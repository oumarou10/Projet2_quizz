<!DOCTPE html>
<html>
    <head>
        <title> Reponses </title>
    </head>
    <body>
        <h1>Voici les bonnes réponses</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
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
                    echo ' Ta reponse à la question '.$i.' est : ' . $_POST['question' . $i] . '</br>';
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
    }

    for ($i = 0;$i < sizeof($getGoodAns);$i++)
    {
        $j = $i + 1;

        if ($reponsesSaisies['question'.$j] == $getGoodAns[$i]['reponse'])
        {
            $resultatQuizz++;
        }
    }
    $average = ($resultatQuizz / $nbQst) * 100;
    ?>
    <h4> Ton score est de <?=$average?> %</h4>
    </body>
</html>
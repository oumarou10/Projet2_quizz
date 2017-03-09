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
        foreach ($reponsesSaisies as $reponse)
        {
            if (in_array($reponse,$bonnesReponses))
            {
                $resultatQuizz++;
                echo $resultatQuizz;
            }
        }
    }

    ?>

    </body>
</html>

<!--  "<pre>";
        print_r($reponsesSaisies);
        echo "</pre>";

echo "<pre>";
        print_r($getGoodAns);
        echo "</pre>";

          /*echo

   foreach ($reponsesSaisies[0] as $reponse){
        if (in_array($reponse,$getGoodAns)){
            $resultat++;
            echo 'tu as choisi : ' .$reponse. ' cest une bonne réponse : ton résultat est de : '.$resultat. '<br>';
        }

        else{
            echo 'tu as choisi :'.$reponse . '</br>';
        }
    }*/


        */


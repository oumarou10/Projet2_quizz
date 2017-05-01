<!DOCTPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title> Reponses </title>
</head>
<body>
    
    <div class="container" style="text-align: center;background-color: aliceblue; margin:5% auto;padding:3%">
        
        <div>
            <h1>Voici les bonnes réponses</h1>
        </div>
        

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
                    echo "Tu n'as coché de cases </br></br>";
                }
                $j++;
                $i++;
            }

            $lastQId = $question['question_id'];
        }

        ?>
        
        <div>
        
            <h3> Ton score est de <?=ceil($average)?> %</h3>

            <p> <?=$showHistory;?></p>

            <p><?= 'Pour revenir à la page d\'accueil <a href="?action=accueil">ici</a>';?></p>
            
        </div>    
    </div>
</body>
</html>
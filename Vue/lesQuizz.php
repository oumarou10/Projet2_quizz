<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Quizz Projet</title>
</head>

<body>

    <div class="container" style="text-align: center;background-color: aliceblue; margin:5% auto;padding:3%">
        
        <div>
            <h1>Quizz</h1>
        </div>
        
        <div>
            
                <form action="?action=traitement&id=<?= $_GET['id']; ?>" class="form" method="POST">


                   <?php foreach ($questions as $question)
                    {
                        if ($lastQuestionId != $question['question_id']) {
                            $i++;

                            ?>
                            <p> <strong><?= $i ?>) <?= $question['question'] ?></strong>  </p>
                            <?php
                        }

                        if ($question['question_type'] == 0)
                        {
                            ?>
                            <div>
                                <input type="radio" class="form-group" name="question<?= $i ?>" id="reponse<?= $question['reponse_id'] ?>" value="<?= $question['reponse'] ?>">
                                <label for="reponse<?= $question['reponse_id'] ?>">  <?= $question['reponse'] ?></label>
                            </div>
                            <?php
                        }

                        elseif ($question['question_type'] == 1)
                            {
                            ?>
                            <div>
                                <input type="checkbox" class="form-group" name="question<?= $i ?>[]" id="reponse<?= $question['reponse_id'] ?>" value="<?= $question['reponse'] ?>">
                                <label for="reponse<?= $question['reponse_id'] ?>">  <?= $question['reponse'] ?>
                                </label>
                            </div>
                        <?php
                            }
                        elseif ($question['question_type'] == 2)
                        {
                              ?>
                            <div>
                                <input type="text" class="form-group" name="question<?= $i ?>" id="reponse<?= $question['reponse_id'] ?>" value="">
                            </div>

                        <?php
                            }

                        else
                        {
                            ?>
                            <div>
                                <input type="text" class="form-group" name="question<?= $i ?>[]" id="reponse<?= $question['reponse_id'] ?>" value="">
                            </div>
                        <?php
                        }

                        $lastQuestionId = $question['question_id'];
                        }
                         ?>

                    <div>
                        <button type="submit" class = "btn btn-default btn-lg" name="envoyer"> Envoyer</button>
                    </div>

                 </form>

            </div>
        
            <footer style="background:darkred; margin : 2%">

                    <p style="color: aliceblue;"> Copyright © 2017. Tous droits réservés. </p>

            </footer>

    </div>
    
    

    </body>
</html>
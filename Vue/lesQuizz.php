<?php

session_start();

$_SESSION['prenom'];

$prenom = $_SESSION['prenom'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Quizz Projet</title>
    </head>

    <body>
        <h1>Les questions de <?=$prenom?></h1>

        <form action="?action=traitement&id=<?= $_GET['id']; ?>" method="POST">
            <?php
            $lastQuestionId = -5;
            $i = 0;

            foreach ($questions as $question)
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

                    <input type="radio" name="question<?= $i ?>" id="reponse<?= $question['reponse_id'] ?>"
                           value="<?= $question['reponse'] ?>">
                    <label for="reponse<?= $question['reponse_id'] ?>">  <?= $question['reponse'] ?></label>

                    <?php
                }

                elseif ($question['question_type'] == 1)
                    {
                    ?>
                    <input type="checkbox" name="question<?= $i ?>[]" id="reponse<?= $question['reponse_id'] ?>"
                           value="<?= $question['reponse'] ?>">
                    <label for="reponse<?= $question['reponse_id'] ?>">  <?= $question['reponse'] ?></label>
                <?php
                    }
                elseif ($question['question_type'] == 2)
                {
                      ?>
                    <input type="text" name="question<?= $i ?>" id="reponse<?= $question['reponse_id'] ?>"
                           value="">

                <?php
                    }

                else
                {
                    ?>
                    <input type="text" name="question<?= $i ?>[]" id="reponse<?= $question['reponse_id'] ?>"
                           value="">
                <?php
                }


                $lastQuestionId = $question['question_id'];
            }
            ?>

            <div>
                <button type="submit" name="envoyer"> Envoyer</button>
            </div>

        </form>

    </body>
</html>
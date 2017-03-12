<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Quizz Projet</title>
    </head>

    <body>
        <h1>Les questions</h1>

        <form action="?action=traitement&id=<?= $_GET['id']; ?>" method="POST">
            <?php
            $lastQuestionId = -5;
            $i = 0;

            foreach ($questions as $question) {
                if ($lastQuestionId != $question['question_id']) {
                    $i++;

                    ?>
                    <p> <?= $i ?>) <?= $question['question'] ?> </p>
                    <?php
                }
                ?>

                <input type="radio" name="question<?= $i ?>" id="reponse<?= $question['reponse_id'] ?>"
                       value="<?= $question['reponse'] ?>">
                <label for="reponse<?= $question['reponse_id'] ?>">  <?= $question['reponse'] ?></label>

                <?php
                $lastQuestionId = $question['question_id'];
            }
            ?>

            <div>
                <button type="submit" name="envoyer"> Envoyer</button>
            </div>

        </form>

    </body>
</html>
<?php ob_start(); ?>

    <form action="?action=traitement&id=<?= $_GET['id']; ?>" class="form" method="POST">

        <?php foreach ($questions as $question) :

            if ($lastQuestionId != $question->getId()) {
                $i++;

                ?>
                <p> <strong><?= $i ?>) <?= $question->getQuestion() ?></strong>  </p>
                <?php
            }

            if ($question->getQuestiontype() == 0) {
                ?>
                <div>
                    <input type="radio" class="form-group" name="question<?= $i ?>" id="reponse<?= $question->reponse_id ?>" value="<?= $question->reponse ?>">
                    <label for="reponse<?= $question->reponse_id ?>">  <?= $question->reponse ?></label>
                </div>
                <?php
            }

            elseif ($question->getQuestiontype() == 1) {
                ?>
                <div>
                    <input type="checkbox" class="form-group" name="question<?= $i ?>[]" id="reponse<?= $question->reponse_id ?>" value="<?= $question->reponse ?>">
                    <label for="reponse<?= $question->reponse_id ?>">  <?= $question->reponse ?>
                    </label>
                </div>
                <?php
            }
            elseif ($question->getQuestiontype() == 2) {
                ?>
                <div>
                    <input type="text" class="form-group" name="question<?= $i ?>" id="reponse<?= $question->reponse_id ?>" value="">
                </div>

                <?php
            }

            else {
                ?>
                <div>
                    <input type="text" class="form-group" name="question<?= $i ?>[]" id="reponse<?= $question->reponse_id ?>" value="">
                </div>
                <?php
            }

            $lastQuestionId = $question->getId();


        endforeach; ?>

        <div>
            <button type="submit" class = "btn btn-default btn-lg" name="envoyer"> Envoyer</button>
        </div>

    </form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'layout.php'; ?>
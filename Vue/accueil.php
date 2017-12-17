<?php ob_start(); ?>
        
    <div class="col-lg-12">
        <h1 style="text-align: center">Bonjour <?=$prenom?> et bienvenue sur mon quizz! </h1>
    </div>
        
    <?php foreach ($allQuiz as $quiz):?>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div style="text-align : center">
                <h2><?= $quiz->getTitre(); ?> </h2>
            </div>
            <div style="text-align : center">
                <p><a class="btn btn-primary btn-lg active" href="?action=lesQuizz&&id=<?= $quiz->getId(); ?>"> ici </a></p>
            </div>
        </div>
    <?php endforeach;?>


<?php $contenu = ob_get_clean(); ?>

<?php require 'layout.php'; ?>

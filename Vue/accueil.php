<?php ob_start(); ?>
        
    <div class="col-lg-12">
        <h1 style="text-align: center">Bonjour <?=$prenom?> et bienvenue sur mon quizz! </h1>
    </div>
        
    <?php foreach ($allQuiz as $quiz):?>
        <div class="col-lg-4 col-md-6 col-xs-12">
                <h2><?= $quiz['titre']; ?> </h2>
                <p><a class="btn btn-link" href="?action=lesQuizz&&id=<?= $quiz['quizz_id']; ?>"> ici </a></p>
        </div>
    <?php endforeach;?>


<?php $contenu = ob_get_clean(); ?>

<?php require 'layout.php'; ?>

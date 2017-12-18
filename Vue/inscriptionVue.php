<?php ob_start(); ?>

    <div class="col-lg-12">
        <h1 style="text-align: center">Bonjour et bienvenue sur mon quizz! </h1>
    </div>

    <div>

        <form action="?action=accueilController" class="form-group" method="POST">
                
            <div class="form-group" >
                <label for="prenom"> Votre Prénom :</label>
                <input type="text" name="prenom" class="form-control btn-xs-12" id="prenom">
            </div>
                   
            <div class="form-group">
                <button type="submit" class = "btn btn-default btn-xs-12" name="envoyer"> Let's go </button>
            </div>
               

        </form>

    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'layout.php'; ?>
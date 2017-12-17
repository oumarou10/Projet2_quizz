<?php ob_start(); ?>

    <div class="col-lg-12">
        <h1 style="text-align: center">Bonjour et bienvenue sur mon quizz! </h1>
    </div>

    <div>

        <form action="?action=accueil" class="form-group" method="POST">
                
            <div class="form-group" >
                <label> Votre Prénom :</label>
                <input type="text" name="prenom" class="form-control btn-xs-12" id="prenom">
            </div>
                   
            <div class="form-group">
                <button type="submit" class = "btn btn-default btn-xs-12" name="envoyer"> Let's go </button>
            </div>
               

        </form>

    </div>

    <footer style="background:darkred;">

        <p style="color: aliceblue;"> Copyright © 2017. Tous droits réservés. </p>

    </footer>

<?php $contenu = ob_get_clean(); ?>

<?php require 'layout.php'; ?>
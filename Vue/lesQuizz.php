<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quizz Projet</title>
</head>

<body>
        <h1>Les questions</h1>
<?php



          for($i = 0;$i < $nbQst ; $i++)
{
?>
        <form action="?lieu=traitement&quizz_id=<?echo$_GET['id'];?>" method="POST">

            <p> <?echo $i+1 . ')' . $questions[$i]['question']; ?> </p>

            <input type="radio" name="question<?echo$i;?>" id="question<?echo$i;?>" value="<?echo$questions[$i]['reponse'];?>">
            <label for="question<?echo$i;?>">  <?echo$questions[$i]['reponse'];?></label>

            <?php
            }
        ?>

        <div>
            <input type="submit" name="envoyer" value="envoyer">
        </div>

    </form>

</body>
</html>
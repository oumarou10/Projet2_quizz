<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quizz Projet</title>
</head>

<body>

    <h1>Les questions </h1>

    <p> Voici les questions </p>

     <?php
        foreach ($getQst as $getQst)
        {
      ?>
    <form action="" method="post">
       <p> <? echo $getQst['questions_id'] . ')' .$getQst['question'];?> </p>

        <input type="radio" name="<?echo$getQst['questions_id'];?>" id="<? echo $getQst['id'];?>">
        <label for="<?echo$getQst['id'];?>"> <?echo$getQst['reponse'];?></label>
        <?php
        }
        ?>
        <div>
            <input type="submit">
        </div>
    </form>

</body>
</html>
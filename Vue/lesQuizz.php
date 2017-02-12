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
        foreach ($questions as $question)
        {
      ?>
    <form action="" method="GET">
       <p> <? echo $question['questions_id'] . ')' .$question['question'];?> </p>

        <input type="radio" name="<?echo$question['questions_id'];?>" id="<? echo $question['id'];?>">
        <label for="<?echo$question['id'];?>"> <?echo$question['reponse'];?></label>
        <?php
        }
        ?>
        <input type="hidden" name="lieu" value="traitement">
        <input type="hidden" name="quizz_id" value="<?echo $_GET['id'];?>">
        <div>
            <input type="submit">
        </div>
    </form>

</body>
</html>
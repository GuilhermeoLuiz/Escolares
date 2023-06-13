<?php
    require "question.inc";
    $id = 1;
    $question = load_question($id,"perguntas.json");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h2><?= $question->question ?></h2>

<form action="carrega_questao.php" method="post">
    <?php 
    for ($i=0; $i < sizeof($question->options); $i++) { 

        echo "<div><input type='radio' id='{$i}' name='alternativa' value='{$i}'><label for='{$i}'>{$question->options[$i]}</label></div>";
    }
    ?>
        <input type="submit" value="Enviar">

</form>
    
</body>
</html>
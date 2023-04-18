<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
$testLenght = strlen($paragraph);
$censuredText = str_replace($word, 'xxx', $paragraph);
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parole da censurare</title>
</head>
<body>
    
    <h1>Parola da censurare</h1>
    
    <h3>Testo</h3>
    
    <p>
        <?php
        echo $paragraph;
    ?>
    </p>

    <span>Il testo ha <?php echo $testLenght ?> parole</span>

    <h3>Parola da censurare</h3>

    <p>
    <?php
        echo $word;
    ?>
    </p>

    <hr>

    <h3>Testo con parole censurate</h3>

    <p>
    <?php 
        echo $censuredText;
    ?>
    </p>

    <span>Il nuovo testo ha <?php echo strlen($censuredText) ?> parole</span>
    
</body>
</html>


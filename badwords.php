<?php

// var_dump($_POST);

$paragrafo = strtolower($_POST["par"]);
$parola = strtolower($_POST["word"]);

$lunghezza = strlen($paragrafo);

$nuovoParagrafo = str_replace($parola, "***", $paragrafo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Php</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="par">
            <div>Paragrafo:<br> <?php echo $paragrafo ?><br>
                <span>Lunghezza: <?php echo $lunghezza ?></span>
            </div>
        </div>
        <div class="par">
            <div>Parola da censurare: <?php echo $parola ?></div>
            <div>Paragrafo con la parola <?php echo $parola ?> censurata:
                <p><?php echo $nuovoParagrafo ?></p>
                <span>Lunghezza nuovo paragrafo: <?php echo strlen($nuovoParagrafo) ?></span>
            </div>
        </div>
    </div>
</body>

</html>
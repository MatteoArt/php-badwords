<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>PHP Badwords</h1>
    <form action="badwords.php" method="post">
        <label for="paragraf">Inserisci paragrafo:</label>
        <textarea name="par" id="paragraf" cols="30" rows="10"></textarea>
        <label for="parola">Inserisci parola da censurare:</label>
        <input type="text" name="word" id="parola"><br>
        <button type="submit">Invia</button>
    </form>
</body>
</html>
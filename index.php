<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="badwords.php" method="post">
        <label for="paragraf">Inserisci paragrafo:</label>
        <textarea name="par" id="paragraf" cols="30" rows="10"></textarea>
        <label for="parola">Inserisci parola da censurare:</label>
        <input type="text" name="word" id="parola">
        <button type="submit">Invia</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>

    <h1>Form PHP</h1>

   <form action="censuredWord.php" method="GET">

        <textarea type="text" cols='50' rows='10' name="paragraph" required></textarea>
        <br>
        <input type="text" name="word" placeholder="Inserisci una parola" required>

        <input type="submit">
   </form>

</body>
</html>


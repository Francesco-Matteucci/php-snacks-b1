<?php

$message = '';

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $validName = strlen($name) > 3;

    $validMail = str_contains($mail, '@') && str_contains($mail, '.');

    $validAge = is_numeric($age);

    if ($validName && $validMail && $validAge) {
        $message = "Accesso riuscito";
    } else {
        $message = "Accesso negato";
    }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <div>
        <h1>Snack 2 - Verifica di accesso</h1>

        <form method="GET">
            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="mail">Email:</label>
                <input type="email" id="mail" name="mail">
            </div>
            <div>
                <label for="age">Età:</label>
                <input type="text" id="age" name="age">
            </div>
            <button type="submit">Invia</button>
        </form>

        <?php
            if ($message !== '') {
            ?>
        <div>
            <p><?= $message ?></p>
        </div>
        <?php
            }?>
    </div>

</body>

</html>
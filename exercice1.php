<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 : Vérifier un palindrome</title>
</head>
<body>
    <h1>Exercice 1 : Vérifier un palindrome</h1>
    <form method="POST">
        <label for="mot">Saisissez un mot :</label>
        <input type="text" name="mot" id="mot" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $mot = strtolower(str_replace(' ', '', $_POST['mot'])); // Supprimer les espaces et mettre en minuscules
        $reverse = strrev($mot);

        if ($mot === $reverse) {
            echo "<p>Le mot <strong>$mot</strong> est un palindrome.</p>";
        } else {
            echo "<p>Le mot <strong>$mot</strong> n'est pas un palindrome.</p>";
        }
    }
    ?>
</body>
</html>
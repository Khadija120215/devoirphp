<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 : Moyenne, maximum et minimum</title>
</head>
<body>
    <h1>Exercice 8 : Moyenne, maximum et minimum d'un tableau</h1>
    <form method="POST">
        <label for="tableau">Entrez une liste de nombres séparés par des virgules :</label>
        <input type="text" name="tableau" id="tableau" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $tableau = array_map('intval', explode(',', $_POST['tableau']));
        $moyenne = array_sum($tableau) / count($tableau);
        $maximum = max($tableau);
        $minimum = min($tableau);

        echo "<p>Tableau : " . implode(', ', $tableau) . "</p>";
        echo "<p>Moyenne : <strong>" . round($moyenne, 2) . "</strong></p>";
        echo "<p>Maximum : <strong>$maximum</strong></p>";
        echo "<p>Minimum : <strong>$minimum</strong></p>";
    }
    ?>
</body>
</html>
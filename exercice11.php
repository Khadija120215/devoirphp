<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11 : Jours restants</title>
</head>
<body>
    <h1>Exercice 11 : Nombre de jours restants jusqu'à la fin de l'année</h1>
    <form method="POST">
        <label for="date">Saisissez une date (YYYY-MM-DD) :</label>
        <input type="date" name="date" id="date" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dateSaisie = new DateTime($_POST['date']);
        $finAnnee = new DateTime($dateSaisie->format('Y') . '-12-31');
        $difference = $dateSaisie->diff($finAnnee);

        echo "<p>Nombre de jours restants jusqu'à la fin de l'année : <strong>{$difference->days}</strong> jours.</p>";
    }
    ?>
</body>
</html>
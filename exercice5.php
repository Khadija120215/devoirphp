<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 : Diamètre, périmètre et surface d’un cercle</title>
</head>
<body>
    <h1>Exercice 5 : Calcul du diamètre, périmètre et surface d’un cercle</h1>
    <form method="POST">
        <label for="rayon">Saisissez le rayon du cercle :</label>
        <input type="number" name="rayon" id="rayon" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $rayon = floatval($_POST['rayon']);
        $diametre = 2 * $rayon;
        $perimetre = 2 * pi() * $rayon;
        $surface = pi() * pow($rayon, 2);

        echo "<p>Pour un cercle de rayon <strong>$rayon</strong> :</p>";
        echo "<ul>";
        echo "<li>Diamètre : <strong>$diametre</strong></li>";
        echo "<li>Périmètre : <strong>" . round($perimetre, 2) . "</strong></li>";
        echo "<li>Surface : <strong>" . round($surface, 2) . "</strong></li>";
        echo "</ul>";
    }
    ?>
</body>
</html>
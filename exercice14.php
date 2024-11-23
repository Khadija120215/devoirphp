<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 : Calcul TVA</title>
</head>
<body>
    <h1>Exercice 14 : Calcul de la TVA et prix TTC</h1>
    <form method="POST">
        <label for="prixHT">Prix HT :</label>
        <input type="number" name="prixHT" id="prixHT" step="0.01" required><br>

        <label for="tauxTVA">Taux de TVA (%) :</label>
        <input type="number" name="tauxTVA" id="tauxTVA" step="0.01" required><br>

        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $prixHT = floatval($_POST['prixHT']);
        $tauxTVA = floatval($_POST['tauxTVA']);

        $montantTVA = $prixHT * $tauxTVA / 100;
        $prixTTC = $prixHT + $montantTVA;

        echo "<p>Montant de la TVA : <strong>" . number_format($montantTVA, 2) . " €</strong></p>";
        echo "<p>Prix TTC : <strong>" . number_format($prixTTC, 2) . " €</strong></p>";
    }
    ?>
</body>
</html>
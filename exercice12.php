<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 : Adresse client</title>
</head>
<body>
    <h1>Exercice 12 : Formulaire d'adresse client</h1>
    <form method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse" required><br>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" required><br>

        <label for="codePostal">Code postal :</label>
        <input type="text" name="codePostal" id="codePostal" required><br>

        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<h2>Informations saisies</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><td>{$_POST['nom']}</td></tr>";
        echo "<tr><th>Prénom</th><td>{$_POST['prenom']}</td></tr>";
        echo "<tr><th>Adresse</th><td>{$_POST['adresse']}</td></tr>";
        echo "<tr><th>Ville</th><td>{$_POST['ville']}</td></tr>";
        echo "<tr><th>Code Postal</th><td>{$_POST['codePostal']}</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
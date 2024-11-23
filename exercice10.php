<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 : Voyelles et consonnes</title>
</head>
<body>
    <h1>Exercice 10 : Comptage des voyelles et consonnes</h1>
    <form method="POST">
        <label for="chaine">Entrez une chaîne de caractères :</label>
        <input type="text" name="chaine" id="chaine" required>
        <button type="submit">Analyser</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $chaine = strtolower($_POST['chaine']);
        $voyelles = preg_match_all('/[aeiouy]/', $chaine);
        $consonnes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/', $chaine);

        echo "<p>Chaîne analysée : <strong>$chaine</strong></p>";
        echo "<p>Nombre de voyelles : <strong>$voyelles</strong></p>";
        echo "<p>Nombre de consonnes : <strong>$consonnes</strong></p>";
    }
    ?>
</body>
</html>
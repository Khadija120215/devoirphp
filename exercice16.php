<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16 : Transformation tableau</title>
</head>
<body>
    <h1>Exercice 16 : Transformation des chaînes d'un tableau</h1>
    <form method="POST">
        <label for="elements">Entrez des mots séparés par des virgules :</label>
        <input type="text" name="elements" id="elements" required>
        <button type="submit">Transformer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $elements = explode(',', $_POST['elements']);
        foreach ($elements as &$element) {
            $element = ucfirst(strtolower(trim($element)));
        }

        echo "<p>Tableau transformé : " . implode(', ', $elements) . "</p>";
    }
    ?>
</body>
</html>
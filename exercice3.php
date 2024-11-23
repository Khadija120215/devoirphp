<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 : Tirages aléatoires</title>
</head>
<body>
    <h1>Exercice 3 : Tirages aléatoires pour trouver un nombre</h1>
    <form method="POST">
        <label for="nombre">Choisissez un nombre (3 chiffres) :</label>
        <input type="number" name="nombre" id="nombre" min="100" max="999" required>
        <button type="submit">Commencer les tirages</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = intval($_POST['nombre']);
        $tirage = 0;
        $essais = 0;

        do {
            $tirage = rand(100, 999);
            $essais++;
        } while ($tirage !== $nombre);

        echo "<p>Le nombre <strong>$nombre</strong> a été trouvé après <strong>$essais</strong> tirages.</p>";
    }
    ?>
</body>
</html>
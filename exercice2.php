<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 : Multiple de 3 et 5</title>
</head>
<body>
    <h1>Exercice 2 : Tester si un nombre est multiple de 3 et 5</h1>
    <form method="POST">
        <label for="nombre">Saisissez un nombre :</label>
        <input type="number" name="nombre" id="nombre" required>
        <button type="submit">Tester</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = intval($_POST['nombre']);
        if ($nombre % 3 === 0 && $nombre % 5 === 0) {
            echo "<p>Le nombre <strong>$nombre</strong> est un multiple de 3 et de 5.</p>";
        } else {
            echo "<p>Le nombre <strong>$nombre</strong> n'est pas un multiple de 3 et de 5.</p>";
        }
    }
    ?>
</body>
</html>
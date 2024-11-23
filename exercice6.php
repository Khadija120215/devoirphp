<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 : Diviseurs d'un nombre</title>
</head>
<body>
    <h1>Exercice 6 : Trouver les diviseurs d'un nombre</h1>
    <form method="POST">
        <label for="nombre">Saisissez un nombre :</label>
        <input type="number" name="nombre" id="nombre" required>
        <button type="submit">Trouver les diviseurs</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = intval($_POST['nombre']);
        echo "<p>Les diviseurs de <strong>$nombre</strong> sont :</p><ul>";
        for ($i = 1; $i <= $nombre; $i++) {
            if ($nombre % $i === 0) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
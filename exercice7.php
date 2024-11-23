<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 : Nombre parfait</title>
</head>
<body>
    <h1>Exercice 7 : Tester si un nombre est parfait</h1>
    <form method="POST">
        <label for="nombre">Saisissez un nombre :</label>
        <input type="number" name="nombre" id="nombre" required>
        <button type="submit">Tester</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = intval($_POST['nombre']);
        $somme = 0;

        for ($i = 1; $i < $nombre; $i++) {
            if ($nombre % $i === 0) {
                $somme += $i;
            }
        }

        if ($somme === $nombre) {
            echo "<p>Le nombre <strong>$nombre</strong> est parfait.</p>";
        } else {
            echo "<p>Le nombre <strong>$nombre</strong> n'est pas parfait.</p>";
        }
    }
    ?>
</body>
</html>
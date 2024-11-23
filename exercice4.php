<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 : Calcul du PPCM</title>
</head>
<body>
    <h1>Exercice 4 : Calcul du PPCM de deux nombres</h1>
    <form method="POST">
        <label for="nombre1">Premier nombre :</label>
        <input type="number" name="nombre1" id="nombre1" required>
        <label for="nombre2">Deuxième nombre :</label>
        <input type="number" name="nombre2" id="nombre2" required>
        <button type="submit">Calculer le PPCM</button>
    </form>

    <?php
    function calculerPPCM($a, $b) {
        $produit = $a * $b;
        while ($b != 0) {
            $reste = $a % $b;
            $a = $b;
            $b = $reste;
        }
        return $produit / $a;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre1 = intval($_POST['nombre1']);
        $nombre2 = intval($_POST['nombre2']);
        $ppcm = calculerPPCM($nombre1, $nombre2);

        echo "<p>Le PPCM de <strong>$nombre1</strong> et <strong>$nombre2</strong> est <strong>$ppcm</strong>.</p>";
    }
    ?>
</body>
</html>
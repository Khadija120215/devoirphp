<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17 : Calcul sinus</title>
</head>
<body>
    <h1>Exercice 17 : Calculer le sinus d'un angle</h1>
    <form method="POST">
        <label for="angle">Angle :</label>
        <input type="number" name="angle" id="angle" required><br>

        <label for="unite">Unité :</label>
        <select name="unite" id="unite">
            <option value="radian">Radian</option>
            <option value="degre">Degré</option>
            <option value="grade">Grade</option>
        </select>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $angle = floatval($_POST['angle']);
        $unite = $_POST['unite'];

        switch ($unite) {
            case 'degre':
                $angle = deg2rad($angle);
                break;
            case 'grade':
                $angle = $angle * M_PI / 200;
                break;
        }

        $sinus = sin($angle);
        echo "<p>Le sinus de l'angle est : <strong>" . round($sinus, 5) . "</strong></p>";
    }
    ?>
</body>
</html>
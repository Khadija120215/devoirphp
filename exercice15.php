<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 : Agence immobilière</title>
</head>
<body>
    <h1>Exercice 15 : Agence immobilière</h1>
    <form method="POST">
        <button name="action" value="vendre">Vendre</button>
        <button name="action" value="acheter">Acheter</button>
        <button name="action" value="louer">Louer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $action = $_POST['action'];
        switch ($action) {
            case 'vendre':
                header('Location: vendre.php');
                break;
            case 'acheter':
                header('Location: acheter.php');
                break;
            case 'louer':
                header('Location: louer.php');
                break;
        }
        exit;
    }
    ?>
</body>
</html>
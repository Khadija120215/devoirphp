<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 : Tableau multidimensionnel</title>
</head>
<body>
    <h1>Exercice 9 : Tableau multidimensionnel associatif</h1>
    <?php
    $personnes = [
        "dupont" => ["prenom" => "Jean", "ville" => "Paris", "age" => 30],
        "martin" => ["prenom" => "Marie", "ville" => "Lyon", "age" => 25],
        "bernard" => ["prenom" => "Paul", "ville" => "Marseille", "age" => 40],
    ];

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Âge</th></tr>";
    foreach ($personnes as $nom => $infos) {
        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>{$infos['prenom']}</td>";
        echo "<td>{$infos['ville']}</td>";
        echo "<td>{$infos['age']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
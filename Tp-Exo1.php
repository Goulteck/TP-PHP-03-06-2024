<?php
// Créer le tableau à deux dimensions
$people = [
    ["prenom" => "Brad", "nom" => "PITT"],
    ["prenom" => "Tom", "nom" => "CRUISE"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau 2 Dimensions</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 60%;
            background-color: #e0e0e0;
            padding: 20px;
        }
        .person {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ccffcc;
            padding: 40px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .index {
            font-size: 3em;
            margin-right: 20px;
        }
        .details {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }
        .details > div {
            background-color: #fff;
            padding: 10px;
            width: 150px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php foreach ($people as $index => $person) : ?>
            <div class="person">
                <div class="index"><?= $index ?></div>
                <div class="details">
                    <div>prenom</div>
                    <div><?= $person['prenom'] ?></div>
                    <div>nom</div>
                    <div><?= $person['nom'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

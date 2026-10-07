<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 5</title>
</head>
<body>

    <h2>Evaluation des moyennes et mentions</h2>

    <?php
    // Fonction d'évaluation d'une moyenne
    function evaluerMoyenne($moyenne) {
        echo "<p><strong>Moyenne : " . $moyenne . "</strong> &rarr; ";

        // 1. Vérification de la validité de la note (entre 0 et 20)
        if ($moyenne < 0 || $moyenne > 20) {
            echo "Note invalide";
        } else {
            // 2. Attribution de la mention pour une note valide
            if ($moyenne < 10) {
                echo "Non validé";
            } elseif ($moyenne >= 10 && $moyenne < 12) {
                echo "Passable";
            } elseif ($moyenne >= 12 && $moyenne < 14) {
                echo "Assez bien";
            } elseif ($moyenne >= 14 && $moyenne < 16) {
                echo "Bien";
            } else { // entre 16 et 20 inclus
                echo "Très bien";
            }
        }

        echo "</p>";
    }

    // 3. Tests successifs avec les valeurs demandées : -1, 9, 10, 12, 14, 16 et 21
    $valeursATester = [-1, 9, 10, 12, 14, 16, 21];

    foreach ($valeursATester as $valeur) {
        evaluerMoyenne($valeur);
    }
    ?>

</body>
</html>
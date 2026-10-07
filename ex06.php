<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 6</title>
</head>
<body>

    <h2>Conversion du numéro de mois en nom français</h2>

    <?php
    // Fonction pour afficher le nom du mois en utilisant un switch
    function afficherNomMois($numeroMois) {
        echo "<p><strong>Numéro de mois : " . $numeroMois . "</strong> &rarr; ";

        switch ($numeroMois) {
            case 1:
                echo "Janvier";
                break;
            case 2:
                echo "Février";
                break;
            case 3:
                echo "Mars";
                break;
            case 4:
                echo "Avril";
                break;
            case 5:
                echo "Mai";
                break;
            case 6:
                echo "Juin";
                break;
            case 7:
                echo "Juillet";
                break;
            case 8:
                echo "Août";
                break;
            case 9:
                echo "Septembre";
                break;
            case 10:
                echo "Octobre";
                break;
            case 11:
                echo "Novembre";
                break;
            case 12:
                echo "Décembre";
                break;
            default:
                echo "Numéro de mois invalide";
                break;
        }

        echo "</p>";
    }

    // 4. Tests avec les valeurs demandées : 1, 3, 12 et 15
    echo "<h3>Tests manuels :</h3>";
    $tests = [1, 3, 12, 15];
    foreach ($tests as $m) {
        afficherNomMois($m);
    }

    // 5. Utilisation du mois courant du serveur avec date("m")
    echo "<h3>Mois courant du serveur :</h3>";
    $moisCourant = (int) date("m");
    afficherNomMois($moisCourant);
    ?>

</body>
</html>
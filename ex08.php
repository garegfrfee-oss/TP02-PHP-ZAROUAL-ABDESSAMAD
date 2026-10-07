<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 8</title>
</head>
<body>

    <!-- Partie 1 : Nombres pairs avec while -->
    <section>
        <h2>1. Nombres pairs de 0 à 20 inclus (10 en gras)</h2>
        <p>
        <?php
        $i = 0;
        while ($i <= 20) {
            if ($i == 10) {
                echo "<strong>10</strong>";
            } else {
                echo $i;
            }

            if ($i < 20) {
                echo " - ";
            }

            $i += 2;
        }
        ?>
        </p>
    </section>

    <hr>

    <!-- Partie 2 : Comparaison while vs do-while -->
    <section>
        <h2>2. Comparaison entre while et do-while ($compteur < 5)</h2>
        
        <h3>A. Boucle while :</h3>
        <?php
        $compteur = 5;
        $executionsWhile = 0;

        while ($compteur < 5) {
            $executionsWhile++;
            $compteur++;
        }
        echo "<p>Nombre d'exécutions du corps de la boucle <strong>while</strong> : " . $executionsWhile . "</p>";
        ?>

        <h3>B. Boucle do-while :</h3>
        <?php
        $compteur = 5; // Réinitialisation du compteur à 5
        $executionsDoWhile = 0;

        do {
            $executionsDoWhile++;
            $compteur++;
        } while ($compteur < 5);

        echo "<p>Nombre d'exécutions du corps de la boucle <strong>do-while</strong> : " . $executionsDoWhile . "</p>";
        ?>
    </section>

    <hr>

    <!-- Partie 3 : Contrôle d'itération avec continue et break -->
    <section>
        <h2>3. Parcours de 1 à 20 (Ignorer multiples de 3, arrêt à 16)</h2>
        <p>
        <?php
        for ($n = 1; $n <= 20; $n++) {
            // Arrêt immédiat dès que le compteur atteint 16 (avant son affichage)
            if ($n == 16) {
                break;
            }

            // Ignorer les multiples de 3
            if ($n % 3 == 0) {
                continue;
            }

            echo $n . " ";
        }
        ?>
        </p>
    </section>

</body>
</html>
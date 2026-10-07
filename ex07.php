<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 7</title>
</head>
<body>

    <!-- Section 1 : Table de multiplication -->
    <section>
        <h2>1. Table de multiplication</h2>
        <?php
        $nombre = 7;
        echo "<p><strong>Table de multiplication de " . $nombre . " :</strong></p>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "<li>" . $nombre . " &times; " . $i . " = " . $resultat . "</li>";
        }
        echo "</ul>";
        ?>
    </section>

    <hr>

    <!-- Section 2 : Pyramide d'étoiles -->
    <section>
        <h2>2. Pyramide d'étoiles (6 lignes)</h2>
        <pre><?php
        $nbLignes = 6;

        // Boucle externe pour les lignes
        for ($i = 1; $i <= $nbLignes; $i++) {
            // Boucle interne pour les étoiles de la ligne actuelle
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            // Retour à la ligne après chaque rangée
            echo "\n";
        }
        ?></pre>
    </section>

</body>
</html>
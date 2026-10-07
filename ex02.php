<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 2</title>
</head>
<body>

    <?php
    // 1. Déclaration des variables
    $nom = "ZAROUAL";
    $prenom = "ABDESSAMAD";
    $age = 20;
    $formation = "Développement Web";

    // 2. Construction de la phrase avec l'opérateur de concaténation .
    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ". ";

    // 3. Ajout d'informations avec l'opérateur .=
    $presentation .= "J'apprends PHP.";

    // Affichage de la phrase de présentation
    echo "<p>" . $presentation . "</p>";

    // 4. Déclarations sensibles à la casse
    $note = 12;
    $Note = 16;

    // Affichage des deux notes distinctes
    echo "<p>Première note (\$note) : " . $note . "</p>";
    echo "<p>Deuxième note (\$Note) : " . $Note . "</p>";
    ?>

</body>
</html>
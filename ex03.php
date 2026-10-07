<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 3</title>
</head>
<body>

    <?php
    // 1. Définition des constantes
    define('TAUX_TVA', 20);
    define('DEVISE', 'MAD');

    // 2. Déclaration des variables de commande
    $prixUnitaireHT = 60;
    $quantite = 3;

    // 3. Calculs financiers
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * (TAUX_TVA / 100);
    $totalTTC = $totalHT + $montantTVA;

    // 4. Ajout des frais de livraison avec l'opérateur d'affectation composée +=
    $fraisLivraison = 15;
    $totalTTC += $fraisLivraison;
    ?>

    <h2>Récapitulatif de la commande</h2>
    <ul>
        <li><strong>Prix Unitaire HT :</strong> <?= $prixUnitaireHT . " " . DEVISE ?></li>
        <li><strong>Quantité :</strong> <?= $quantite ?></li>
        <li><strong>Total HT :</strong> <?= $totalHT . " " . DEVISE ?></li>
        <li><strong>Taux de TVA :</strong> <?= TAUX_TVA ?>%</li>
        <li><strong>Montant TVA :</strong> <?= $montantTVA . " " . DEVISE ?></li>
        <li><strong>Frais de livraison :</strong> <?= $fraisLivraison . " " . DEVISE ?></li>
        <li><strong>Montant Final (TTC + Livraison) :</strong> <?= $totalTTC . " " . DEVISE ?></li>
    </ul>

    <p>
        <?php
        // 5. Vérification de l'existence de la constante TAUX_TVA
        if (defined('TAUX_TVA')) {
            echo "La constante TAUX_TVA est bien définie et égale à " . TAUX_TVA . "%.";
        } else {
            echo "La constante TAUX_TVA n'est pas définie.";
        }
        ?>
    </p>

</body>
</html>
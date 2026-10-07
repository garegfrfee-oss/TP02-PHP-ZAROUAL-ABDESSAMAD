<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 9</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

    <h2>Récapitulatif des notes des étudiants</h2>

    <?php
    // Jeu de données fictives
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    // Variables d'accumulation et de statistiques
    $somme = 0;
    $nbValide = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    $nbTotal = count($notes);
    ?>

    <!-- 1 & 2. Affichage des étudiants et de leur état dans un tableau HTML -->
    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $etudiant => $note) : 
                // Accumulation pour la somme
                $somme += $note;

                // Compteur des étudiants ayant validé (seuil = 10)
                $statut = ($note >= 10) ? "Validé" : "Non validé";
                if ($note >= 10) {
                    $nbValide++;
                }

                // Détermination de la meilleure note et de l'étudiant associé
                if ($note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $etudiant;
                }
            ?>
                <tr>
                    <td><?= $etudiant ?></td>
                    <td><?= $note ?> / 20</td>
                    <td><?= $statut ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
    // 3. Calcul de la moyenne de la classe
    $moyenne = $somme / $nbTotal;
    ?>

    <!-- Affichage des statistiques calculées -->
    <h3>Statistiques de la classe :</h3>
    <ul>
        <li><strong>Somme des notes :</strong> <?= $somme ?></li>
        <li><strong>Moyenne de la classe :</strong> <?= $moyenne ?> / 20</li>
        <li><strong>Nombre d'étudiants ayant validé :</strong> <?= $nbValide ?> sur <?= $nbTotal ?></li>
        <li><strong>Meilleure note :</strong> <?= $meilleurEtudiant ?> (<?= $meilleureNote ?> / 20)</li>
    </ul>

</body>
</html>
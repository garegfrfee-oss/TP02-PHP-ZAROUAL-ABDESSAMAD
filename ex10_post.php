<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Traitement POST</title>
</head>
<body>

    <h2>Traitement des données - Méthode POST</h2>

    <?php
    // Vérification de la présence des paramètres dans $_POST
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
        
        // Nettoyage des espaces superflus
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $groupe = trim($_POST['groupe']);

        // Vérification que les champs ne sont pas vides
        if (!empty($nom) && !empty($prenom) && !empty($groupe)) {
            // Échappement des caractères spéciaux pour éviter les XSS
            $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "<p style='color: green;'><strong>Bienvenue " . $prenomSecurise . " " . $nomSecurise . " du groupe " . $groupeSecurise . " !</strong></p>";
        } else {
            echo "<p style='color: red;'><strong>Erreur :</strong> Tous les champs sont obligatoires. Veuillez remplir le formulaire complètement.</p>";
        }
    } else {
        // Message en cas d'accès direct sans soumettre le formulaire
        echo "<p style='color: orange;'><strong>Information :</strong> Le formulaire n'a pas été soumis. Veuillez accéder à la page via le formulaire <a href='ex10_post.html'>ex10_post.html</a>.</p>";
    }
    ?>

    <p><a href="ex10_post.html">Retour au formulaire POST</a></p>

</body>
</html>
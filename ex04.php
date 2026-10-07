<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02 PHP - Exercice 4</title>
</head>
<body>

    <h2>1 & 2. Types et valeurs avec var_dump()</h2>
    <pre><?php
    $varInt = 42;
    $varStringNum = "42";
    $varFloat = 15.8;
    $varBoolTrue = true;
    $varBoolFalse = false;
    $varNull = null;

    var_dump($varInt);
    var_dump($varStringNum);
    var_dump($varFloat);
    var_dump($varBoolTrue);
    var_dump($varBoolFalse);
    var_dump($varNull);
    ?></pre>

    <h2>3. Conversions explicites (Type Casting)</h2>
    <pre><?php
    $stringToInt = (int)$varStringNum;
    $floatToInt = (int)$varFloat;
    $intToString = (string)$varInt;

    echo "Conversion de \"42\" en entier : ";
    var_dump($stringToInt);

    echo "Conversion de 15.8 en entier : ";
    var_dump($floatToInt);

    echo "Conversion de 42 en chaîne : ";
    var_dump($intToString);
    ?></pre>

    <h2>4. Affichage des booléens avec echo vs var_dump()</h2>
    <p>
        <strong>Avec echo :</strong><br>
        true : "<?= $varBoolTrue ?>" <br>
        false : "<?= $varBoolFalse ?>" (Affichage d'une chaîne vide)
    </p>

    <p><strong>Avec var_dump() :</strong></p>
    <pre><?php
    var_dump($varBoolTrue);
    var_dump($varBoolFalse);
    ?></pre>

    <h2>5. Conversion en booléens</h2>
    <pre><?php
    echo "0 en booléen : ";
    var_dump((bool)0);

    echo "\"0\" en booléen : ";
    var_dump((bool)"0");

    echo "\"PHP\" en booléen : ";
    var_dump((bool)"PHP");

    echo "Tableau vide en booléen : ";
    var_dump((bool)[]);
    ?></pre>

</body>
</html>
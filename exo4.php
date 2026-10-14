<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 04 — Types et conversions</title>
</head>
<body>
    <h1>Types et conversions en PHP</h1>
    <pre><?php
    $entier = 42;
    $chaine42 = "42";
    $flottant = 15.8;
    $vrai = true;
    $faux = false;
    $valeurNulle = null;

    echo "Valeurs initiales :\n";
    echo '$entier : ';
    var_dump($entier);
    echo '$chaine42 : ';
    var_dump($chaine42);
    echo '$flottant : ';
    var_dump($flottant);
    echo '$vrai : ';
    var_dump($vrai);
    echo '$faux : ';
    var_dump($faux);
     echo '$valeurNulle : ';
    var_dump($valeurNulle);

    $chaineEnEntier = (int) $chaine42;
    $flottantEnEntier = (int) $flottant;
    $entierEnChaine = (string) $entier;

    echo "\nConversions :\n";
    echo '"42" converti en entier : ';
    var_dump($chaineEnEntier);
    echo '15.8 converti en entier : ';
    var_dump($flottantEnEntier);
    echo '42 converti en chaîne : ';
    var_dump($entierEnChaine);

    echo "\nBooléens affichés avec echo (entre crochets) :\n";
    echo 'true avec echo : [' . $vrai . "]\n";
    echo 'false avec echo : [' . $faux . "]\n";
    echo "true avec var_dump : ";
    var_dump($vrai);
    echo "false avec var_dump : ";
    var_dump($faux);

    echo "\nConversions en booléens :\n";
    echo '0 en booléen : ';
    var_dump((bool) 0);
    echo '"0" en booléen : ';
    var_dump((bool) "0");
    var_dump((bool) "0");
    echo '"PHP" en booléen : ';
    var_dump((bool) "PHP");
    echo 'tableau vide en booléen : ';
    var_dump((bool) []);
    ?></pre>
</body>
</html>
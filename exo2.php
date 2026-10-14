<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02 — Variables et concaténation</title>
</head>
<body>
    <h1>Exercice 02 — Variables et concaténation</h1>

    <?php
    $nom = "Tyane";
    $prenom = "Assia";
    $age = 19;
    $formation = "IAP";

    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age
        . " ans et je suis en formation " . $formation . ". ";
    $presentation .= "J'apprends PHP";

    echo "<p>" . htmlspecialchars($presentation, ENT_QUOTES, 'UTF-8') . "</p>\n";

    $note = 12;
    $Note = 16;

    echo "<p>Note (\$note) : " . $note . "</p>\n";
    echo "<p>Note (\$Note) : " . $Note . "</p>\n";
    ?>
</body>
</html>

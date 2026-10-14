<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 07 — Boucles for</title>
</head>
<body>
    <h1>Boucles et compteurs</h1>

    <section>
        <h2>Table de multiplication de 7</h2>
        <?php
        $nombre = 7;
        for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++) {
            echo $nombre . ' × ' . $multiplicateur . ' = '
                . ($nombre * $multiplicateur) . '<br>';
        }
        ?>
    </section>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre><?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo '*';
                }
            echo "\n";
        }
        ?></pre>
    </section>
</body>
</html>
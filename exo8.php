<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 08 — Boucles et contrôle</title>
</head>
<body>
    <h1>Boucles et contrôle des itérations</h1>

    <section>
        <h2>1. Nombres pairs de 0 à 20</h2>
        <?php
        $nombre = 0;
        while ($nombre <= 20) {
            if ($nombre === 10) {
                echo '<strong>' . $nombre . '</strong><br>';
            } else {
                echo $nombre . '<br>';
            }
            $nombre += 2;
        }
        ?>
    </section>

    <section>
        <h2>2. Comparaison de while et do-while</h2>
        <?php
        $compteur = 5;
        $executionsWhile = 0;
        while ($compteur < 5) {
            $executionsWhile++;
            $compteur++;
        }
        echo '<p>Exécutions du corps de while : ' . $executionsWhile . '</p>';

        $compteur = 5;
        $executionsDoWhile = 0;
        do {
            $executionsDoWhile++;
            $compteur++;
        } while ($compteur < 5);
        echo '<p>Exécutions du corps de do-while : ' . $executionsDoWhile . '</p>';
        ?>
    </section>

    <section>
        <h2>3. Continue et break</h2>
        <?php
        for ($compteur = 1; $compteur <= 20; $compteur++) {
            if ($compteur >= 16) {
                break;
            }
            if ($compteur % 3 === 0) {
                continue;
            }
            echo $compteur . '<br>';
        }
        ?>
    </section>
</body>
</html>

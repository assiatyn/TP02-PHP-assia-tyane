<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03 — Constantes et calculs</title>
</head>
<body>
    <h1>Récapitulatif de la commande</h1>

    <?php
    define('TAUX_TVA', 20);
    define('DEVISE', 'MAD');

    $prixUnitaireHT = 60;
    $quantite = 3;
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;
    $montantFinal = $totalTTC;
    $montantFinal += 15;
    ?>

    <ul>
        <li>Prix unitaire HT : <?= number_format($prixUnitaireHT, 2, ',', ' ') ?> <?= DEVISE ?></li>
        <li>Quantité : <?= $quantite ?></li>
        <li>Total HT : <?= number_format($totalHT, 2, ',', ' ') ?> <?= DEVISE ?></li>
        <li>Taux de TVA : <?= TAUX_TVA ?> %</li>
        <li>Montant de TVA : <?= number_format($montantTVA, 2, ',', ' ') ?> <?= DEVISE ?></li>
        <li>Total TTC : <?= number_format($totalTTC, 2, ',', ' ') ?> <?= DEVISE ?></li>
        <li>Frais de livraison : 15,00 <?= DEVISE ?></li>
        <li>Montant final : <?= number_format($montantFinal, 2, ',', ' ') ?> <?= DEVISE ?></li>
    </ul>

    <p>La constante TAUX_TVA est définie : <?= defined('TAUX_TVA') ? 'oui' : 'non' ?></p>
</body>
</html>
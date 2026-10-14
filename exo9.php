<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 09 — Notes de la classe</title>
</head>
<body>
    <h1>Résultats de la classe</h1>

    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $sommeNotes = 0;
    $nombreValides = 0;
    $meilleureNote = null;
    $meilleurEtudiant = null;
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                           <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $etudiant => $note): ?>
                <?php
                $sommeNotes += $note;
                $valide = $note >= 10;
                if ($valide) {
                    $nombreValides++;
                }
                if ($meilleureNote === null || $note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $etudiant;
                }
                ?>
                <tr>
                    <td><?= htmlspecialchars($etudiant, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= $note ?></td>
                    <td><?= $valide ? 'Validé' : 'Non validé' ?></td>
                </tr>
                            <?php endforeach; ?>
        </tbody>
    </table>

    <?php $moyenne = $sommeNotes / count($notes); ?>
    <h2>Bilan</h2>
    <ul>
        <li>Somme des notes : <?= $sommeNotes ?></li>
        <li>Moyenne de la classe : <?= number_format($moyenne, 2, ',', ' ') ?></li>
        <li>Étudiants ayant validé : <?= $nombreValides ?></li>
        <li>Meilleure note : <?= htmlspecialchars($meilleurEtudiant, ENT_QUOTES, 'UTF-8') ?> (<?= $meilleureNote ?>)</li>
    </ul>
</body>
</html>
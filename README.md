# TP02-PHP-assia-tyane
TP 02 PHP — Programmation Web 2 — 2026/2027

Nom:Assia
Prenom:Tyane
Groupe:03

## liste des exercices
- Exercice 1: affichage PHP
- Exercice 2: variables
- Exercice 3: constantes
- Exercice 4: types
- Exercice 5: condition if
- Exercice 6: switch
- Exercice 7: boucle for 
- Exercice 8: while; do-whil; break
- Exercice 9: tableaux associatifs
- Exercice 10: formulaires GET/POST
## Exercice 01 — Notions PHP

Le fichier [`ex01.php`](ex01.php) présente les balises HTML et PHP, l'encodage UTF-8, `echo`, les commentaires et la syntaxe courte `<?= ... ?>`.

## Exercice 02 — Variables et concaténation

Le fichier [`ex02.php`](ex02.php) utilise des variables fictives, la concaténation avec `.` et l'ajout de texte avec `.=`.

En PHP, les noms de variables sont sensibles à la casse : `$note` et `$Note` sont donc deux variables distinctes. Leur contenu peut être différent, ici `12` et `16`.

Parmi les noms proposés, les noms valides sont `$a`, `$_a`, `$a_a`, `$AAA` et `$a1`. `$a!` est invalide car `!` ne peut pas faire partie d'un nom de variable. `$1a` est invalide car un nom de variable ne peut pas commencer par un chiffre (après le signe `$`). Ces deux exemples invalides sont mentionnés ici uniquement comme texte et ne sont pas utilisés comme variables dans le code PHP exécuté.
## Exercice 04 — Types et conversions

Le fichier [`ex04.php`](ex04.php) présente les types `int`, `float`, `string`, `bool` et `null`, puis montre plusieurs conversions avec leur type obtenu.

`echo` convertit `false` en chaîne vide : rien n'apparaît entre les crochets dans l'exemple. `var_dump(false)` affiche explicitement `bool(false)`, ce qui permet de voir la valeur et son type.
## Exercice 05 — Conditions et moyennes

Le fichier [`ex05.php`](ex05.php) valide que la moyenne est comprise entre 0 et 20 avant de lui attribuer une mention. Les valeurs testées et leurs résultats :

| Moyenne | Message |
| ---: | --- |
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

Les bornes 0 et 20 sont incluses dans l'intervalle valide ; une valeur invalide ne reçoit aucune mention.
## Exercice 06 — Switch et mois

Le fichier [`ex06.php`](ex06.php) associe les numéros 1 à 12 aux noms français des mois avec `switch`, `case`, `break` et `default`. Il affiche le mois courant du serveur grâce à `(int) date("m")`. Pour rejouer un test, remplacer temporairement l'affectation de la date par une valeur numérique.

Résultats des tests demandés :

| Numéro | Résultat |
| ---: | --- |
| 1 | Janvier |
| 3 | Mars |
| 12 | Décembre |
| 15 | Numéro de mois invalide |
## Partie A — GET

Le formulaire `ex10_get.html` envoie `nom`, `prenom` et `groupe` à `ex10_get.php` avec la méthode GET. Le script récupère les valeurs avec `$_GET` et affiche un message de bienvenue.

Après l’envoi, les valeurs apparaissent dans la barre d’adresse, après le point d’interrogation, sous forme de paramètres tels que `?nom=...&prenom=...&groupe=G1`. Les espaces et caractères spéciaux sont encodés dans l’URL. Cela rend les valeurs visibles et l’URL peut être copiée ou conservée dans l’historique.

## Partie B — POST

Le formulaire `ex10_post.html` transmet les mêmes champs à `ex10_post.php` avec la méthode POST. Le traitement lit les données via `$_POST` et affiche le même type de message.

Après un envoi POST, l’adresse reste celle de `ex10_post.php` sans les valeurs du formulaire dans la chaîne de requête. Le navigateur envoie les valeurs dans le corps de la requête HTTP plutôt que dans l’URL.

## Partie C — Vérifications

Les deux pages de traitement vérifient que les trois clés existent, que leurs valeurs sont des chaînes et qu’elles ne sont pas vides après `trim()`. Le groupe est aussi limité à G1, G2, G3 ou G4. Une ouverture directe affiche des explications sur les champs manquants, sans accès à une clé absente. Les données saisies (et les messages d’erreur) passent par `htmlspecialchars(..., ENT_QUOTES, 'UTF-8')` avant l’affichage HTML.

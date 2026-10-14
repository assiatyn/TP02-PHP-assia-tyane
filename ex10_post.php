<?php
if (!isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    echo "Veuillez remplir le formulaire POST.";
    exit;
}

$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);
$groupe = trim($_POST['groupe']);

if ($nom === '' || $prenom === '' || $groupe === '') {
    echo "Erreur : tous les champs sont obligatoires.";
    exit;
}

$nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
$prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
$groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

echo "Bienvenue $prenom $nom ! Vous êtes dans le groupe $groupe.";
?>

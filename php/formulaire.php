<?php

// Vérifications côté serveur
if (isset($_POST['form'])){
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';
    $sujet = htmlentities(trim($_POST['sujet'])) ?? '';

    $erreur = array();

    if (strlen($nom) === 0)
        array_push($erreur, "Veuillez saisir votre nom");
    elseif (!ctype_alpha($nom))
        array_push($erreur, 'Veuillez saisir des caractères alphabétiques pour écrire votre nom');
    if (strlen($prenom) === 0)
        array_push($erreur, "Veuillez saisir votre prenom");
    elseif (!ctype_alpha($prenom))
        array_push($erreur, 'Veuillez saisir des caractères alphabétiques pour écrire votre prénom');
    if (strlen($_POST['email']) === 0)
        array_push($erreur, 'Veuillez saisir une adresse mail');
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, 'Veuillez saisir une adresse mail valide');
    if (strlen($_POST['sujet']) === 0)
        array_push($erreur, 'Veuillez renseigner le sujet de votre message')
}
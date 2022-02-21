<?php

if (isset($_POST['validation'])){
    // Vérifications côté serveur
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
        array_push($erreur, 'Veuillez renseigner le sujet de votre message');
    
    // Le code s'exécute si les conditions sont remplies
    if (count($erreur) === 0 )
        echo 'Message envoyé';
    else {
            $messageErreur = "<ul>";
            $i = 0;
            do {
                $messageErreur .= "<li>";
                $messageErreur .= $erreur[$i];
                $messageErreur .= "</li>";
                $i++;
            } while ($i < count($erreur));
    
            $messageErreur .= "</ul>";
    
            echo $messageErreur;
        }
}
else {
    echo "Merci de renseigner le formulaire";
    $nom = $prenom = $email = '';
}

include 'Contact.html';
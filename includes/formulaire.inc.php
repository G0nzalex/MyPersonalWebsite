<?php
require './classes/Formulaire.php';
$donnees = new Formulaire();
$erreurs = [];
// $nom = "";
if (isset($_POST['validation'])) {
//     // Vérifications côté serveur
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';
    $sujet = htmlentities(trim($_POST['sujet'])) ?? '';
    $message = htmlentities(trim($_POST['message'])) ?? '';

    $donnees->setNom($nom);
    $nom = $donnees->getNom();
    $messageErreur = $donnees->msgErreur($nom, "<p>Une erreur a été détectée, veuillez réecrire votre nom</p>");
    $donnees->compteur($erreurs, $messageErreur);

    $donnees->setPrenom($prenom);
    $prenom = $donnees->getPrenom();
    $messageErreur = $donnees->msgErreur($prenom, "<p>Une erreur a été détectée, veuillez réecrire votre prénom</p>");
    $donnees->compteur($erreurs, $messageErreur);

    $donnees->setEmail($email);
    $email = $donnees->getEmail();
    $messageErreur = $donnees->msgErreur($email, "<p>Une erreur a été détectée, veuillez réecrire votre email</p>");
    $donnees->compteur($erreurs, $messageErreur);

    $donnees->setSujet($sujet);
    $sujet = $donnees->getSujet();
    $messageErreur = $donnees->msgErreur($sujet, "<p>Vous n'avez pas indiqué le sujet de votre message</p>");
    $donnees->compteur($erreurs, $messageErreur);

    $donnees->setMessage($message);
    $message = $donnees->getMessage();
    $messageErreur = $donnees->msgErreur($message, "<p>Vous devez saisir le contenu de votre message</p>");
    $donnees->compteur($erreurs, $messageErreur);

    var_dump($messageErreur);

    if (count($erreurs) === 0 && strlen($messageErreur) === 0)
        $donnees->envoiMail("alexandrecalimero@gmail.com");
    if (count($erreurs) === 1 && strlen($messageErreur) > 1)
        echo $messageErreur;
    if (count($erreurs) > 1)
        echo $messageErreur = "<p>Plusieurs champs n'ont pas été remplis correctement</p>";

}
include 'contact.php';
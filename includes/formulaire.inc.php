<?php
require './classes/Formulaire.php';
$donnees = new Formulaire();
// $nom = "";
if (isset($_POST['validation'])) {
//     // Vérifications côté serveur
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';
    $sujet = htmlentities(trim($_POST['sujet'])) ?? '';
    $message = htmlentities(trim($_POST['message'])) ?? '';
//     // Tableaux des erreurs possibles
//     $erreur = array();

//     if (strlen($nom) === 0)
//         array_push($erreur, "Veuillez saisir votre nom");

//     if (strlen($prenom) === 0)
//         array_push($erreur, "Veuillez saisir votre prénom");

//     if (!filter_var($email, FILTER_VALIDATE_EMAIL))
//         array_push($erreur, "Veuillez saisir un e-mail valide");

//     if (strlen($sujet) === 0)
//         array_push($erreur, "Veuillez saisir le sujet de votre message");

//     if (strlen($message) === 0)
//         array_push($erreur, "Veuillez saisir un message");

//     // Envoi du mail
//     if (count($erreur) === 0) {
//         $from = $email;
//         $to = "alexandrecalimero@gmail.com";
//         $subject = $sujet;
//         $header = "De:" . $from;
//         mail($to, $subject, $message, $header);
//         echo "Message envoyé";
        
//         // Renvoi d'un message en cas d'erreur
//     } else {
//         $messageErreur = "<ul>";
//         $i = 0;
//         do {
//             $messageErreur .= "<li>";
//             $messageErreur .= $erreur[$i];
//             $messageErreur .= "</li>";
//             $i++;
//         } while ($i < count($erreur));

//         $messageErreur .= "</ul>";

//         echo $messageErreur;
//     }
// } else {
//     echo "Merci de renseigner le formulaire";
//     $nom = $prenom = $email = $message = '';
// }
$donnees->setNom($nom);
$nom = $donnees->getNom();
// if (strlen($nom) === 0)
//     echo $messageErreur = "<p>Veuillez saisir votre nom</p>";
$donnees->setPrenom($prenom);
$prenom = $donnees->getPrenom();
// if (strlen($prenom) === 0)
//     echo $messageErreur = "<p>Veuillez saisir votre prénom</p>";
$donnees->setEmail($email);
$email = $donnees->getEmail();
// if (strlen($email) === 0)
//     echo $messageErreur = "<p>Veuillez saisir votre email</p>";
$donnees->setSujet($sujet);
$sujet = $donnees->getSujet();
// if (strlen($sujet) === 0)
//     echo $messageErreur = "<p>Veuillez saisir le sujet de votre message</p>";
$donnees->setMessage($message);
$message = $donnees->getMessage();
// if (strlen($message) === 0)
//     echo $messageErreur = "<p>Veuillez saisir votre message</p>";
var_dump($nom);
var_dump($prenom);
var_dump($email);
var_dump($sujet);
var_dump($message);
// $moi->setNom("nicaise");
// $nom = $moi->getNom();
// $moi->setemail('alexandre.nicaise.2000gmail.com');
// $email = $moi->getEmail();
// var_dump($nom);
// var_dump($moi->setNom("alex"));
// var_dump($email);
// var_dump($moi->setEmail('alexandre.nicaise.2000gmail.com'));
}
include 'contact.php';
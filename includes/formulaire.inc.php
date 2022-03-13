<?php
if (isset($_POST['validation'])) {
    // Vérifications côté serveur
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';
    $sujet = htmlentities(trim($_POST['sujet'])) ?? '';
    $message = htmlentities(trim($_POST['message'])) ?? '';
    // Tableaux des erreurs possibles
    $erreur = array();

    if (strlen($nom) === 0)
        array_push($erreur, "Veuillez saisir votre nom");

    if (strlen($prenom) === 0)
        array_push($erreur, "Veuillez saisir votre prénom");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, "Veuillez saisir un e-mail valide");

    if (strlen($sujet) === 0)
        array_push($erreur, "Veuillez saisir le sujet de votre message");

    if (strlen($message) === 0)
        array_push($erreur, "Veuillez saisir un message");

    // Envoi du mail
    if (count($erreur) === 0) {
        ini_set('sendmail_from', 'smtp.free.fr');
        $from = $email;
        $to = "alexandrecalimero@gmail.com";
        $subject = $sujet;
        $header = "De:" . $from;
        mail($to, $subject, $message, $header);
        echo "Message envoyé";
        
        // Renvoi d'un message en cas d'erreur
    } else {
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
} else {
    echo "Merci de renseigner le formulaire";
    $nom = $prenom = $email = $message = '';
}
include 'contact.php';
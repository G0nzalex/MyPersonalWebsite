<?php

function mailto($mail, $message)
{
    $from = $mail;
    $to = "alexandre.nicaise.2000@gmail.com";
    $subject = "Envoi depuis le formulaire de contact";
    $header = "From:" . $from;
    mail($to, $subject, $message, $header);
    echo "Message envoyé";
}
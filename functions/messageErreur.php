<?php

function messageErreur()
{
    $erreur = array();
    $messageErreur = "<ul>";
    for ($i = 0; $i < count($erreur); $i++)
    {
        $messageErreur .= "<li>";
        $messageErreur .= $erreur[$i];
        $messageErreur .= "</li>";
    }
    $messageErreur = "</ul>";
    echo $messageErreur;
}
<?php

trait Erreurs
{
    public function msgErreur(string $entree, string $msgErreur) : string
    {
        return strlen($entree) === 0 ? $msgErreur : "";
    }
    public function compteur(array &$erreurs, string $messageErreur) : void
    {
        if (isset($erreurs) && strlen($messageErreur) !== 0)
            array_push($erreurs, "");
    }
}
<?php

trait Erreurs
{
    public function msgErreur(string $entree, string $msgErreur) : string
    {
        return strlen($entree) === 0 ? $msgErreur : "";
    }
}
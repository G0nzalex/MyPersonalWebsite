<?php

class Formulaire
{
    protected string $nomUtilisateur = "";
    protected string $prenomUtilisateur = "";
    protected string $emailUtilisateur = "";
    protected string $sujetMail = "";
    protected string $contenuMail = "";
    protected array $erreur = [];
    protected string $messageErreur = "";

    public function __construct($nom, $prenom, $email, $sujet, $message)
    {
        $this->nomUtilisateur = $nom;
        $this->prenomUtilisateur = $prenom;
        $this->emailUtilisateur = $email;
        $this->sujetMail = $sujet;
        $this->contenuMail = $message;
    }
    
}
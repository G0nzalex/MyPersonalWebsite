<?php

class Formulaire
{
    public string $nomUtilisateur = "";
    private string $prenomUtilisateur = "";
    private string $emailUtilisateur = "";
    private string $sujetMail = "";
    private string $contenuMail = "";
    private array $erreur = [];
    private string $msgErreur = "";
    private string $messageErreur = "";

    // public function __construct($nom, $prenom, $email, $sujet, $message)
    // {
    //     $this->nomUtilisateur = $nom;
    //     $this->prenomUtilisateur = $prenom;
    //     $this->emailUtilisateur = $email;
    //     $this->sujetMail = $sujet;
    //     $this->contenuMail = $message;
    // }
    public function getNom() : string
    {
        return isset ($this->nomUtilisateur) ? $this->nomUtilisateur : $this->msgErreur = "Pas de nom";
    }
    public function setNom($nom) : void
    {
        $this->nomUtilisateur = $nom;
    }
    public function getPrenom() : string
    {
        return isset ($this->prenomUtilisateur) ? $this->prenomUtilisateur : $this->msgErreur = "Pas de prénom";
    }
    public function setPrenom(string $prenom) : void
    {
        $this->prenomUtilisateur = $prenom;
    }
    public function getEmail() : string
    {
        return isset ($this->emailUtilisateur) ? $this->emailUtilisateur : $this->msgErreur = "Pas d'email";
    }
    public function setEmail(string $email) : void
    {
        $this->emailUtilisateur = $email;
    }
    public function getSujet() : string
    {
        return isset ($this->sujetMail) ? $this->sujetMail : $this->msgErreur = "Pas de sujet";
    }
    public function setSujet(string $sujet)
    {
        $this->sujetMail = $sujet;
    }
    public function getMessage() : string
    {
        return isset ($this->contenuMail) ? $this->contenuMail : $this->msgErreur = "Pas de message";
    }
    public function setMessage(string $message)
    {
        $this->contenuMail = $message;
    }
}
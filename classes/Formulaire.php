<?php

class Formulaire
{
    private string $nomUtilisateur = "";
    private string $prenomUtilisateur = "";
    private string $emailUtilisateur = "";
    private string $sujetMail = "";
    private string $contenuMail = "";
    // private string $msgErreur = "";
    // private array $erreur = [];


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
        return !isset($this->nomUtilisateur) || strlen($this->nomUtilisateur) === 0 || !ctype_alpha($this->nomUtilisateur) ? $this->nomUtilisateur = "" : mb_strtoupper($this->nomUtilisateur);

    }
    public function setNom(string $nom) : void
    {
        $this->nomUtilisateur = $nom;
    }
    public function getPrenom() : string
    {
        return !isset($this->prenomUtilisateur) || strlen($this->prenomUtilisateur) === 0 || !ctype_alpha($this->prenomUtilisateur) ? $this->prenomUtilisateur = "" : $this->prenomUtilisateur;
    }
    public function setPrenom(string $prenom) : void
    {
        $this->prenomUtilisateur = $prenom;
    }
    public function getEmail() : string
    {
        return !isset($this->emailUtilisateur) || strlen($this->emailUtilisateur) === 0 || !filter_var($this->emailUtilisateur, FILTER_VALIDATE_EMAIL) ? $this->emailUtilisateur = "" : $this->emailUtilisateur;
    }
    public function setEmail(string $email) : void
    {
        $this->emailUtilisateur = $email;
    }
    public function getSujet() : string
    {
        return !isset($this->sujetMail) || strlen($this->sujetMail) === 0 ? $this->sujetMail = "" : $this->sujetMail;
    }
    public function setSujet(string $sujet) : void
    {
        $this->sujetMail = $sujet;
    }
    public function getMessage() : string
    {
        return !isset($this->contenuMail) || strlen($this->contenuMail) === 0 ? $this->contenuMail = "" : $this->contenuMail;
    }
    public function setMessage(string $message) : void
    {
        $this->contenuMail = $message;
    }

    public function envoiMail(string $destinataire) : string
    {
        $from = $this->getEmail();
        $to = $destinataire;
        $subject = $this->getSujet();
        $header = "De" . $from;
        mail($to, $subject, $this->contenuMail, $header);
        return "Message envoyé";
    }

    public function erreurs() : string
    {
        if (count($this->erreur) > 1)
            return $this->msgErreur = "Vous n'avez pas rempli plusieurs champs";
    }
}
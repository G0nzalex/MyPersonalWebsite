<?php

class Formulaire
{
    private string $nomUtilisateur = "";
    private string $prenomUtilisateur = "";
    private string $emailUtilisateur = "";
    private string $sujetMail = "";
    private string $contenuMail = "";


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
        return isset ($this->nomUtilisateur) && strlen($this->nomUtilisateur) ? $this->nomUtilisateur : $this->msgErreur = "Pas de nom";
    }
    public function setNom(string $nom) : string
    {
        if (ctype_alpha($nom)){
            if (ctype_lower($nom))
                $nom = mb_strtoupper($nom);
            $this->nomUtilisateur = $nom;
            return "Modification effectuée";
        }
        else
            return "Veuillez ne taper que des lettres pour votre nom";
    }
    public function getPrenom() : string
    {
        return isset ($this->prenomUtilisateur) && strlen($this->prenomUtilisateur) ? $this->prenomUtilisateur : $this->msgErreur = "Pas de prénom";
    }
    public function setPrenom(string $prenom) : string
    {
        if (ctype_alpha($prenom)){
            $this->prenomUtilisateur = $prenom;
            return "Modification effectuée";
        }
        else
            return "Veuillez ne taper que des lettres pour votre prénom";
    }
    public function getEmail() : string
    {
        return isset ($this->emailUtilisateur) && strlen($this->emailUtilisateur) ? $this->emailUtilisateur : $this->msgErreur = "Pas d'email";
    }
    public function setEmail(string $email) : string
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->emailUtilisateur = $email;
            return "Modification effectuée";
        }
        else
            return "Veuillez saisir une adresse mail valide";
    }
    public function getSujet() : string
    {
        return isset ($this->sujetMail) && strlen($this->sujetMail) ? $this->sujetMail : $this->msgErreur = "Pas de sujet";
    }
    public function setSujet(string $sujet) : void
    {
        $this->sujetMail = $sujet;
    }
    public function getMessage() : string
    {
        return isset ($this->contenuMail) && strlen($this->contenuMail) ? $this->contenuMail : $this->msgErreur = "Pas de message";
    }
    public function setMessage(string $message) : void
    {
        $this->contenuMail = $message;
    }
}
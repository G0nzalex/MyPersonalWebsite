<?php

class Formulaire
{
    private string $nomUtilisateur = "";
    private string $prenomUtilisateur = "";
    private string $emailUtilisateur = "";
    private string $sujetMail = "";
    private string $contenuMail = "";
    private array $erreur = [];
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
        return $this->nomUtilisateur;
    }
    public function setNom($nom) : void
    {
        $this->nomUtilisateur = $nom;
    }
    public function getPrenom() : string
    {
        return $this->prenomUtilisateur;
    }
    public function setPrenom($prenom) : void
    {
        $this->prenomUtilisateur = $prenom;
    }
    public function getEmail() : string
    {
        return $this->emailUtilisateur;
    }
    public function setEmail($email)
    {
        $this->emailUtilisateur = $email;
    }
    public function getSujet() : string
    {
        return $this->sujetMail;
    }
    public function setSujet($sujet)
    {
        $this->sujetMail = $sujet;
    }
    public function getMessage() : string
    {
        return $this->contenuMail;
    }
    public function setMessage($message)
    {
        $this->contenuMail = $message;
    }
}
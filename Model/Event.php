<?php

class Event{
    private $id;
    private $nom;
    private $description;
    private $lieu;
    private $date;
    private $affiche;


    public function __construct($nom, $description, $lieu, $date, $affiche)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->lieu = $lieu;
        $this->date = $date;
        $this->affiche = $affiche;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getLieu()
    {
        return $this->lieu;
    }


    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getAffiche()
    {
        return $this->affiche;
    }


    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;
    }


}

?>

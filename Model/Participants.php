<?php

class Participants{
    private $id;
    private $event_id;
    private $nom;
    private $email;
    private $date;


    public function __construct($event_id, $nom, $email)
    {
        $this->event_id = $event_id;
        $this->nom = $nom;
        $this->email = $email;

    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getEventId()
    {
        return $this->event_id;
    }


    public function setEventId($event_id)
    {
        $this->event_id = $event_id;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


}

?>

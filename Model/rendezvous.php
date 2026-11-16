<?php
class RendezVous {
    private $id;
    private $user;
    private $nom;
    private $prenom;
    private $email;
    private $phone;
    private $department;
    private $doctor;
    private $date;
    private $time;
    private $message;
    private $etat;
    
    // Constructor
    public function __construct($id,$user, $nom, $prenom, $email, $phone, $department, $doctor, $date, $time, $message, $etat) {
        $this->id = $id;
        $this->user = $user;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->phone = $phone;
        $this->department = $department;
        $this->doctor = $doctor;
        $this->date = $date;
        $this->time = $time;
        $this->message = $message;
        $this->etat = $etat;
    }
    
    // Getters
    public function getUserId() {
        return $this->user;
    }
    public function getId() {
        return $this->id;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPhone() {
        return $this->phone;
    }
    
    public function getDepartment() {
        return $this->department;
    }
    
    public function getDoctor() {
        return $this->doctor;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function getTime() {
        return $this->time;
    }
    
    public function getMessage() {
        return $this->message;
    }
    
    public function getEtat() {
        return $this->etat;
    }
    
    // Setters
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    
    public function setDepartment($department) {
        $this->department = $department;
    }
    
    public function setDoctor($doctor) {
        $this->doctor = $doctor;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    public function setTime($time) {
        $this->time = $time;
    }
    
    public function setMessage($message) {
        $this->message = $message;
    }
    
    public function setEtat($etat) {
        $this->etat = $etat;
    }
}

?>
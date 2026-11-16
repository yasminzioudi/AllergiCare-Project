<?php

class Categorie
{
    private ?int $id_c = null;
    private ?string $c_nom = null;

    public function __construct($id = null, $nom)
    {
        $this->id_c = $id;
        $this->c_nom = $nom;
    }

    public function getIdC()
    {
        return $this->id_c;
    }

    public function getNom()
    {
        return $this->c_nom;
    }

    public function setNom($nom)
    {
        $this->c_nom = $nom;
        return $this;
    }
}

?>
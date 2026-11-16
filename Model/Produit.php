<?php

class Produit
{
    private ?int $idProduit = null;
    private ?string $Name = null;
    private ?string $Price = null;
    private ?string $Image = null;
    private ?int $categoryId = null;
    private ?string $disponibility = null;

    public function __construct($id = null, $n, $p, $img, $catId,$dispo)
    {
        $this->idProduit = $id;
        $this->Name = $n;
        $this->Price = $p;
        $this->Image = $img;
        $this->categoryId = $catId;
        $this->disponibility = $dispo;
    }

    public function getIdProduit()
    {
        return $this->idProduit;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPrice()
    {
        return $this->Price;
    }

    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    public function getImage()
    {
        return $this->Image;
    }

    public function setImage($Image)
    {
        $this->Image = $Image;

        return $this;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }
    public function getDisponibility()
    {
        return $this->disponibility;
    }

    public function setDisponibility($disponibility)
    {
        $this->disponibility = $disponibility;

        return $this;
    }
}
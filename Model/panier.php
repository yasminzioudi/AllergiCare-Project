<?php
class produit
{
    private ?int $id = null;
    private ?string $name = null;
    private ?float $price = null;
    

    public function __construct($id = null, $name = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    public function getIdpanier()
    {
        return $this->id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}

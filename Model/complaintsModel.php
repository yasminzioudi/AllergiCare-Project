<?php

class ComplaintsController
{
    private $id;
    private $rating;
    private $comments;

    public function __construct($id = null, $rating = null, $comments = null)
    {
        $this->id = $id;
        $this->rating = $rating;
        $this->comments = $comments;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

}
?>

<?php

class petProducts
{
    public $image;
    public $name;
    public $category;
    public $price;
    public $type;

    # construct function
    function __construct($_image, $_name, $_category, $_price, $_type)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->type = $_type;
    }

    #Get functions
    public function getImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }
}

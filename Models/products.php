<?php
class Products
{
    protected $image;
    protected $name;
    protected $price;
    protected $categories;

    public function __construct($_image, $_name, $_price, Categories $Categories)
    {
        $this->setImage($_image);
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategories($Categories);
    }

    #setters
    public function setImage($_image)
    {
        $this->image = $_image;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function setCategories($Categories)
    {
        $this->categories = $Categories;
    }

    #getters
    public function getImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategories()
    {
        return $this->categories;
    }
};

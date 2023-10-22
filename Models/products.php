<?php
class Products
{
    protected $image;
    protected $name;
    protected $price;
    protected $categories;

    function __construct($_image, $_name, $_price, Categories $Categories)
    {
        $this->setImage($_image);
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategories($Categories);
    }

    #setters
    function setImage($_image)
    {
        $this->image = $_image;
    }

    function setName($_name)
    {
        $this->name = $_name;
    }

    function setPrice($_price)
    {
        $this->price = $_price;
    }

    function setCategories($Categories)
    {
        $this->categories = $Categories;
    }

    #getters
    function getImage()
    {
        return $this->image;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getCategories()
    {
        return $this->categories;
    }
};

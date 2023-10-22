<?php
class Food extends Products
{
    public $type = 'Food';
    protected $weight;
    protected $ingredients;

    function __construct($_image, $_name, $_price, Categories $Categories, $_weight, $_ingredients)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
    }

    #setters
    function setWeight($_weight)
    {
        $this->weight = $_weight;
    }

    function setIngredients($_ingredients)
    {
        $this->ingredients = $_ingredients;
    }

    #getters
    function getWeight()
    {
        return $this->weight;
    }

    function getIngredients()
    {
        return $this->ingredients;
    }
};

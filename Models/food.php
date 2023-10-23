<?php
class Food extends Products
{
    public $type = 'Food';
    protected $weight;
    protected $ingredients;

    public function __construct($_image, $_name, $_price, Categories $Categories, $_weight, $_ingredients)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
    }

    #setters
    public function setWeight($_weight)
    {
        $this->weight = $_weight;
    }

    public function setIngredients($_ingredients)
    {
        $this->ingredients = $_ingredients;
    }

    #getters
    public function getWeight()
    {
        return $this->weight;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
};

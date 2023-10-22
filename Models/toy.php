<?php
class Toy extends Products
{
    public $type = 'Toy';
    protected $materials;
    protected $colour;
    protected $weight;

    function __construct($_image, $_name, $_price, Categories $Categories, $_materials, $_colour, $_weight)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->setMaterials($_materials);
        $this->setColour($_colour);
        $this->setWeight($_weight);
    }

    #setters
    function setMaterials($_materials)
    {
        $this->materials = $_materials;
    }

    function setColour($_colour)
    {
        $this->colour = $_colour;
    }

    function setWeight($_weight)
    {
        $this->weight = $_weight;
    }

    #getters
    function getMaterials()
    {
        return $this->materials;
    }

    function getColour()
    {
        return $this->colour;
    }

    function getWeight()
    {
        return $this->weight;
    }
};

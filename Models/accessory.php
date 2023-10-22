<?php
class Accessory extends Products
{
    public $type = 'Accessory';
    protected $materials;
    protected $colour;

    function __construct($_image, $_name, $_price, Categories $Categories, $_materials, $_colour)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->materials = $_materials;
        $this->colour = $_colour;
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

    #getters
    function getMaterials()
    {
        return $this->materials;
    }

    function getColour()
    {
        return $this->colour;
    }
};

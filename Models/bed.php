<?php
class Bed extends Products
{
    public $type = 'Bed';
    protected $materials;
    protected $colour;

    public function __construct($_image, $_name, $_price, Categories $Categories, $_materials, $_colour)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->setMaterials($_materials);
        $this->setColour($_colour);
    }

    #setters
    public function setMaterials($_materials)
    {
        $this->materials = $_materials;
    }

    public function setColour($_colour)
    {
        $this->colour = $_colour;
    }

    #getters
    public function getMaterials()
    {
        return $this->materials;
    }

    public function getColour()
    {
        return $this->colour;
    }
};

<?php
class Toy extends Products
{
    public $type = 'Toy';
    public $materials;
    public $colour;
    public $weight;

    function __construct($_name, $_price, $_image, Categories $Categories, $_materials, $_colour, $_weight)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->materials = $_materials;
        $this->colour = $_colour;
        $this->weight = $_weight;
    }
};

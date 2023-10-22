<?php
class Bed extends Products
{
    public $type = 'Bed';
    public $materials;
    public $colour;

    function __construct($_name, $_price, $_image, Categories $Categories, $_materials, $_colour)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->materials = $_materials;
        $this->colour = $_colour;
    }
};

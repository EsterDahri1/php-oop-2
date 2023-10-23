<?php
class Bed extends Products
{
    use Materials;
    use Colour;
    public $type = 'Bed';
    protected $materials;
    protected $colour;

    public function __construct($_image, $_name, $_price, Categories $Categories, $_materials, $_colour)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->setMaterials($_materials);
        $this->setColour($_colour);
    }
};

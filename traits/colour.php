<?php
trait Colour
{
    protected $colour;

    public function setColour($_colour)
    {
        $this->colour = $_colour;
    }

    public function getColour()
    {
        return $this->colour;
    }
}

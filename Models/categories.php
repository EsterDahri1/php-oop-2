<?php
class Categories
{
    protected $pet;

    function __construct($_pet)
    {
        $this->setPet($_pet);
    }

    #setter
    function setPet($_pet)
    {
        $this->pet = $_pet;
    }

    #getter
    function getPet()
    {
        return $this->pet;
    }
};

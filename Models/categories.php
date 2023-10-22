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

    function getAnimal()
    {
        if (strtolower($this->pet) == 'dog') {
            return '<img width="30" src="./img/dog.png" alt="black outline of a dog face">';
        } elseif (strtolower($this->pet) == 'cat') {
            return '<img width="30" src="./img/cat.png" alt="black outline of a cat face">';
        }
    }
};

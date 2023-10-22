<!--
CONSEGNA:    
1) Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
* L'e-commerce vende prodotti per animali.
* I prodotti sono categorizzati, le categorie sono Cani o Gatti.
* I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

2) Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

3) Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.
-->

<?php
class Products
{
    public $image;
    public $name;
    public $price;
    public $categories;

    function __construct($_image, $_name, $_price, Categories $Categories)
    {
        $this->setImage($_image);
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategories($Categories);
    }

    #setters
    function setImage($_image)
    {
        $this->image = $_image;
    }

    function setName($_name)
    {
        $this->name = $_name;
    }

    function setPrice($_price)
    {
        $this->price = $_price;
    }

    function setCategories($Categories)
    {
        $this->categories = $Categories;
    }

    #getters
    function getImage()
    {
        return $this->image;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getCategories()
    {
        return $this->categories;
    }
};

class Categories
{
};

class Food extends Products
{
    public $type = 'Cibo';
    public $weight;
    public $ingredients;

    function __construct($_name, $_price, $_image, Categories $Categories, $_weight, $_ingredients)
    {
        parent::__construct($_image, $_name, $_price, $Categories);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
};

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

class Toy extends Products
{
};

class Accessory extends Products
{
};

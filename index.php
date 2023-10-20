<?php
/* 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
* L'e-commerce vende prodotti per animali.
* I prodotti sono categorizzati, le categorie sono Cani o Gatti.
* I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
* Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
* organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. 
*/

class petProducts
{
    public $image;
    public $name;
    public $category;
    public $price;
    public $type;

    # construct function
    function __construct($_image, $_name, $_category, $_price, $_type)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->type = $_type;
    }

    #Get functions
    public function getImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }
}

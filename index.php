<!--
CONSEGNA:    
1) Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
* L'e-commerce vende prodotti per animali.
* I prodotti sono categorizzati, le categorie sono Cani o Gatti.
* I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

2) Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

3) Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. ✔️
-->

<?php
define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require_once ROOT . DS . 'Models' . DS . 'categories.php';
require_once ROOT . DS . 'Models' . DS . 'products.php';
require_once ROOT . DS . 'Models' . DS . 'food.php';
require_once ROOT . DS . 'Models' . DS . 'bed.php';
require_once ROOT . DS . 'Models' . DS . 'toy.php';
require_once ROOT . DS . 'Models' . DS . 'accessory.php';
require_once ROOT . DS . 'db.php';
require_once ROOT . DS . 'Layout' . DS . 'head.php';
require_once ROOT . DS . 'Layout' . DS . 'main.php';
require_once ROOT . DS . 'Layout' . DS . 'footer.php';
?>


<main>




</main>
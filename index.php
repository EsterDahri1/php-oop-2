<?php
/* 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
* L'e-commerce vende prodotti per animali.
* I prodotti sono categorizzati, le categorie sono Cani o Gatti.
* I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
* Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
* organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. 
*/





#Dogs
$dogBites = new petProducts('','Wolf of Wilderness Crocchette per cani', 'fa-solid fa-dog', '€ 72,99', 'food');
$dogBed = new petProducts('', 'Basic Bed', 'fa-solid fa-dog', '€ 15,49', 'Dog/s Bed');
$dogToy = new petProducts('', 'TIAKI palla meteorite', 'fa-solid fa-dog', '€ 5,99', 'toys');
$dogDoor = new petProducts('', 'Porta basculante', 'fa-solid fa-dog', '€ 70,99', 'door');


#Cats

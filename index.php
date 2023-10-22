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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolpet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-success bg-opacity-50">
    <header class="p-3 bg-light h-100">
        <div class="container d-flex align-items-center justify-content-between">
            <img src="./img/Logo.png" alt="green boolpet logo">
            <form class="w-50 d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="You search it, we fetch it!">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <i class="pe-5 fa-solid fa-cart-shopping text-success fa-xl"></i>
        </div>
    </header>
    <main>
        <nav class="navbar navbar-expand-sm navbar-light bg-success">
            <div class="container">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav m-auto mt-2 mt-lg-0 fs-4">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Dog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Cat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </main>
    <footer class="mt-4 p-2 bg-light text-center h-70">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <a class="btn btn-outline-success rounded-2" href="https://www.instagram.com/boolean.careers/?hl=it">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a class="btn btn-outline-success rounded-2" href="https://www.facebook.com/boolean.careers/?locale=it_IT">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-success rounded-2" href="https://boolean.careers/corso/full-stack-web-development">
                    <i class="fa-solid fa-globe"></i>
                </a>
            </div>
            <div>
                &copy; 2023 By
                <a class="text-decoration-none text-success" href="https://boolean.careers/corso/full-stack-web-development">Boolean &hearts;</a>
            </div>
        </div>
    </footer>
</body>

</html>
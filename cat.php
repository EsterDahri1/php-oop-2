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
?>

<main>


    <div class="container">
        <h1>All items</h1>
        <?php
        include ROOT . DS . 'Layout' . DS . 'partials' . DS . 'catItems.php';
        ?>
    </div>

</main>

<?php
require_once ROOT . DS . 'Layout' . DS . 'partials' . DS . 'footer.php';
?>
<h3 class="pt-3 text-white">Accessory:</h3>
<div class="row row-cols-3 g-5">
    <?php foreach ($products as $product) : ?>
        <?php if ($product->getCategories()->getPet() == 'dog') : ?>
            <?php if ($product->type == 'Accessory') : ?>
                <div class="col">
                    <?php include ROOT . DS . 'Layout' . DS . 'partials' . DS . 'accessoryCard.php'; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<h3>Accessory:</h3>
<div class="row">
    <div class="">
        <?php foreach ($products as $product) : ?>
            <?php if ($product->getCategories()->getPet() == 'cat') : ?>
                <?php if ($product->type == 'Accessory') : ?>
                    <div class="col-3">
                        <?php include ROOT . DS . 'Layout' . DS . 'partials' . DS . 'accessoryCard.php'; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
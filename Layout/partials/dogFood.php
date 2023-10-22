<h3>Food:</h3>
<div class="row">
    <div class="">
        <?php foreach ($products as $product) : ?>
            <?php if ($product->getCategories()->getPet() == 'dog') : ?>
                <?php if ($product->type == 'Food') : ?>
                    <div class="col-3">
                        <?php include ROOT . DS . 'Layout' . DS . 'partials' . DS . 'foodCard.php'; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
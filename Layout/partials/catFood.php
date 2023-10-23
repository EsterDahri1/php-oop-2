<h3 class="pt-3 text-white">Food:</h3>
<div class="row row-cols-3 g-5">
    <?php foreach ($products as $product) : ?>
        <?php if ($product->getCategories()->getPet() == 'cat') : ?>
            <?php if ($product->type == 'Food') : ?>
                <div class="col">
                    <?php include ROOT . DS . 'Layout' . DS . 'partials' . DS . 'foodCard.php'; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
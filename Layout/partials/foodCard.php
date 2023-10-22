<div class="card">
    <img class="card-img-top" src="<?php $product->getImage() ?>" alt="Title">
    <div class="card-body">
        <div><strong>Product name:</strong> <?php $product->getName() ?></div>
        <div><strong>Price:</strong> <?php $product->getPrice() ?></div>
        <div><strong>For:</strong><?php $product->getCategories()->getAnimal() ?></div>
        <div><strong>Weight:</strong><?php $product->getWeight() ?></div>
        <div><strong>Ingredients:</strong><?php $product->getIngredients() ?></div>
    </div>
</div>
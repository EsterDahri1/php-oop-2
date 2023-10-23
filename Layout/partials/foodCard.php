<div class="card">
    <img class="card-img-top" src="<?php echo $product->getImage() ?>" alt="Title">
    <div class="card-body">
        <div><strong>Product name:</strong> <?php echo $product->getName() ?></div>
        <div><strong>Price:</strong> <?php echo $product->getPrice() ?></div>
        <div><strong>For:</strong><?php echo $product->getCategories()->getAnimal() ?></div>
        <div><strong>Weight:</strong><?php echo $product->getWeight() ?></div>
        <div><strong>Ingredients:</strong><?php echo $product->getIngredients() ?></div>
    </div>
</div>
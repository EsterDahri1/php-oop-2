<div class="card h-100">
    <img class="card-img-top" src="<?php echo $product->getImage() ?>" alt="Title">
    <div class="card-body">
        <div><strong>Product name:</strong><?php echo $product->getName() ?></div>
        <div><strong>Price:</strong><?php echo $product->getPrice() ?></div>
        <div><strong>For:</strong><?php echo $product->getCategories()->getAnimal() ?></div>
        <div><strong>Made of:</strong><?php echo $product->getMaterials() ?></div>
        <div><strong>Colour:</strong> <?php echo $product->getColour() ?></div>
    </div>
</div>
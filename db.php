<?php

$food = [

    new Food('', 'Simply Wild', '$ 33', new Categories('dog'), '20 lbs', 'Chicken and brown rice'),
    new Food('', 'Dr. Marty', '$ 15.29', new Categories('dog'), '3 x 16 oz', 'Freeze-dried raw complete meal'),
    new Food('', 'Blue Buffalo Canned Chicken Dinner', '$ 2.59', new Categories('dog'), '12.5 oz', 'Chicken and vegetables'),
    new Food('', 'Smothered Comfort Merrick', '$ 2.99', new Categories('dog'), '13.2 oz', 'Chicken thigh, barley, carrots, sweet potatoes red apples and blueberries'),
    new Food('', 'Blue Buffalo Wilderness Chicken Recipe Grain-Free ', '$ 27.67', new Categories('cat'), '2.5 lbs', 'Deboned Chicken, Chicken Meal, Pea Protein, Tapioca Starch, Peas, Menhaden Fish Meal'),
    new Food('', 'Simply Wild Cat Food', '$ 33.99', new Categories('cat'), '20 lbs', 'Chicken Meal and brown rice'),
    new Food('', 'Canidae Life Stages Indoor Formula', '$ 48.99', new Categories('cat'), '15 lbs', 'Chicken meal, brown rice, white rice, cracked pearled barley, peas, millet, chicken fat'),
    new Food('', 'Nutro Wholesome Essentials', '$ 23.59', new Categories('cat'), '5 lbs', 'Chicken and brown rice'),
];

$bed = [
    new Bed('', 'Otis & Claude', '$ 35.99', new Categories('dog'), 'Hi-Tech Cashmere', 'Brown'),
    new Bed('', 'Pet Gear Bolster Pad', '$ 22.09', new Categories('dog'), 'Poliester', 'Black'),
    new Bed('', 'Aspen Pet Antimicrobial Deluxe Pillow', '$ 37.59', new Categories('dog'), 'Faux suede and micro terry cover', 'Caramel/Stripe Chenille'),
    new Bed('', 'PetMate Round Deluxe Cuddle Cup', '$ 24.99', new Categories('dog'), 'Micro Suede Fabrics With Plush Micro Terry ', 'Cian'),
    new Bed('', 'SnuggleSafe Microwave Heat Pad', '$ 32.99', new Categories('cat'), '', 'Beige and Brown'),
];

$toy = [];

$accessory = [];

$products = [
    ...$food,
    ...$bed,
    ...$toy,
    ...$accessory
];

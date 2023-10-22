<?php

$food = [

    new Food('', 'Simply Wild', '$ 33', dog, '20 lbs', 'Chicken and brown rice'),
    new Food('', 'Dr. Marty', '$ 15.29', dog, '3 x 16 oz', 'Freeze-dried raw complete meal'),
    new Food('', 'Blue Buffalo Canned Chicken Dinner', '$ 2.59', dog, '12.5 oz', 'Chicken and vegetables'),
    new Food('', '', '$ 33', dog, '20 lbs', 'Chicken and brown rice'),
    new Food('', 'Simply Wild', '$ 33', cat, '20 lbs', 'Chicken and brown rice'),
    new Food('', 'Simply Wild', '$ 33', cat, '20 lbs', 'Chicken and brown rice'),
    new Food('', 'Simply Wild', '$ 33', cat, '20 lbs', 'Chicken and brown rice'),
    new Food('', 'Simply Wild', '$ 33', cat, '20 lbs', 'Chicken and brown rice'),
];

$bed = [];

$toy = [];

$accessory = [];

$products = [
    ...$food,
    ...$bed,
    ...$toy,
    ...$accessory
];

<?php
require_once __DIR__  . '/models/Food_product.php';


$animal_list = [
    'cat',
    'dog'
];


$dog_food = new Food_product('RoyalCanin', 11, $animal_list, 1.5, 'croquettes')


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Commerce</title>
</head>

<body>
    <h1>Pet-Commerce</h1>

    <h3><?php echo $dog_food->brand ?></h3>
    <ul>
        <li>Cost:
            <?php echo $dog_food->price . '$' ?>
        </li>
        <li>Category:
            <?php echo $dog_food->category[1] ?>
        </li>
        <li>Weight:
            <?php echo $dog_food->weight . 'kg' ?>
        </li>
        <li>Type:
            <?php echo $dog_food->type ?>
        </li>
    </ul>
</body>

</html>
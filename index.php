<?php
require_once __DIR__  . '/models/Food_product.php';
require_once __DIR__  . '/models/Toy_product.php';
require_once __DIR__  . '/users/User_registered.php';
require_once __DIR__  . '/users/Cart.php';



$animal_list = [
    'cat',
    'dog'
];


$dog_food = new Food_product('RoyalCanin', 11, new Category($animal_list), 1.5, 'croquettes');
$dog_toy = new Toy_product('Sanipet', 30, new Category($animal_list), 5.9, 'scratcher');



// metodo per stampare tutto dal carrello e stampare solo le voci del prodotto che ci servono
// echo get_class($dog_toy)

// echo date('Y/m/d');
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
    <div>
        <h3><?php echo $dog_food->brand ?></h3>
        <ul>
            <li>Cost:
                <?php echo $dog_food->price . '$' ?>
            </li>
            <li>Category:
                <?php echo $dog_food->category->pet[1]; ?>
            </li>
            <h3>Type of Product: <?php echo  Food_product::$product_type  ?></h3>
            <ul>
                <li>Weight:
                    <?php echo $dog_food->weight . 'kg' ?>
                </li>
                <li>Type:
                    <?php echo $dog_food->type ?>
                </li>

            </ul>
        </ul>

    </div>
    <div>
        <h3><?php echo $dog_toy->brand ?></h3>
        <ul>
            <li>Cost:
                <?php echo $dog_toy->price . '$' ?>
            </li>
            <li>Category:
                <?php echo $dog_toy->category->pet[0]; ?>
            </li>
            <h3>Type of Product: <?php echo  Toy_product::$product_type  ?></h3>
            <ul>
                <li>Weight:
                    <?php echo $dog_toy->weight . 'kg' ?>
                </li>
                <li>Type:
                    <?php echo $dog_toy->type ?>
                </li>
                <li>Description:
                    <?php echo $dog_toy->description ?>
                </li>
            </ul>
        </ul>
        <?php $premium = new User_registered('Marco', 'Ferrari', 'via delle vie', 28);
        $premium->cart = new Cart();
        $premium->cart->add($dog_food);
        $premium->cart->add($dog_toy);

        try {
            if (get_class($premium) === 'User_registered') {
                $discount =  $premium->get_discount();
                echo ($premium->cart->getTotal() - (($premium->cart->getTotal() * $discount) / 100)) . '$';
            } else {
                echo  $premium->cart->getTotal() . '$';
            };
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        ?>
    </div>
</body>

</html>
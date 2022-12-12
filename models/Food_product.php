<?php
include_once __DIR__ . "/Product.php";

class Food_product extends Product
{
    public $weight;
    public $type;
    public static $product_type = 'Pet Food';

    public function __construct(string $brand, int $price, array $category, float $weight, string $type)
    {
        parent::__construct($brand, $price, $category);
        $this->weight = $weight;
        $this->type = $type;
    }
}

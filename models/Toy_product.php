<?php
include_once __DIR__ . "/Product.php";

class Toy_product extends Product
{
    public $weight;
    public $type;
    public $description;
    public static $product_type = 'Pet Toy';
    /**
     * 
     */
    public function __construct(string $brand, int $price, Category $category, float $weight, string $type, string $description = null)
    {
        parent::__construct($brand, $price, $category);
        $this->weight = $weight;
        $this->type = $type;
        $this->description = $description;
    }
}

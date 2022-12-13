<?php
require_once __DIR__  . '/Category.php';

class Product
{
    public $brand;
    public $price;
    public $category;

    function __construct(string $brand, int $price,  Category  $category)
    {
        $this->brand = $brand;
        $this->price = $price;
        $this->category = $category;
    }
}

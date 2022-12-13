<?php

class Cart
{
    private $products = [];

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function getTotal()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price;
        }
        return $sum;
    }
}

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
        if (count($this->products) > 0) {
            $sum = 0;
            foreach ($this->products as $product) {
                $sum += $product->price;
            }
            return $sum;
        } else {
            throw new Exception('The cart is empty');
        }
    }
}

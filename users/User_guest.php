<?php

class User_Guest
{
    protected $name;
    protected $surname;
    protected $adress;
    protected $age;
    public $cart;

    function __construct($name, $surname, $adress, int $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->adress = $adress;
        $this->age = $age;
    }
}

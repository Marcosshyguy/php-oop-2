<?php

include_once __DIR__ . "/User_guest.php";

class User_registered extends User_Guest
{
    private $user_discount = 20;

    public function __construct(string $name, string $surname, string $adress, int $age)
    {
        parent::__construct($name, $surname, $adress, $age);
    }

    public function set_discount($user_discount)
    {
        $this->user_discount = $user_discount;
    }

    public function get_discount()
    {
        return $this->user_discount;
    }
}

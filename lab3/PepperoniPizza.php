<?php
require_once __DIR__ . '/../../lab2/vendor/autoload.php';
use Pavel\Lw2\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct(string $sauce, array $toppings)
    {
        $this->name = 'Пепперони';
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }
}
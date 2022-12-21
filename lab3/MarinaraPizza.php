<?php
require_once __DIR__ . '/../../lab2/vendor/autoload.php';
use Pavel\Lw2\Pizza;

class MarinaraPizza extends Pizza
{
    public function __construct(string $sauce, array $toppings)
    {
        $this->name = 'Маринара';
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }
}
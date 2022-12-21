<?php
require_once __DIR__ . '/vendor/pavel/lw2/vendor/autoload.php';
use Pavel\Lw2\Pizza;

class DiabloPizza extends Pizza
{
    public function __construct(string $sauce, array $toppings)
    {
        $this->name = 'Дьябло';
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }
}
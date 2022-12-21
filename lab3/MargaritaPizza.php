<?php
require_once __DIR__ . '/vendor/pavel/lw2/vendor/autoload.php';
use Pavel\Lw2\Pizza;

class MargaritaPizza extends Pizza
{
    public function __construct(string $sauce, array $toppings)
    {
        $this->name = 'Маргарита';
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }
}
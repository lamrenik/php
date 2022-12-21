<?php
require_once __DIR__ . '/../../lab2/vendor/autoload.php';
use Pavel\Lw2\Pizza;
use Pavel\Lw2\PizzaStore;

class Milano extends PizzaStore
{
    public function __construct()
    {
        $this->name = 'Милано';
    }
    public function createPizza(Pizza $pizzaType): Pizza
    {
        $type = get_class($pizzaType);
        if ($type !== 'MarinaraPizza' && $type !== 'PepperoniPizza') {
            throw new InvalidArgumentException();
        }
        return $pizzaType;
    }
}
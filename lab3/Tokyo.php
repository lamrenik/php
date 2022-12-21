<?php
require_once __DIR__ . '/vendor/pavel/lw2/vendor/autoload.php';
use Pavel\Lw2\Pizza;
use Pavel\Lw2\PizzaStore;

class Tokyo extends PizzaStore
{
    public function __construct()
    {
        $this->name = 'Токио';
    }
    public function createPizza(Pizza $pizzaType): Pizza
    {
        $type = get_class($pizzaType);
        if ($type !== 'DiabloPizza' && $type !== 'MargaritaPizza') {
            throw new InvalidArgumentException();
        }
        return $pizzaType;
    }
}
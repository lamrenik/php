<?php
namespace Pavel\Lw2;

use Pavel\Lw2\Pizza;

abstract class PizzaStore
{
    protected string $name;
    public function orderPizza(Pizza $type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare()->cut();
    }

    public abstract function createPizza(Pizza $type): Pizza;
}
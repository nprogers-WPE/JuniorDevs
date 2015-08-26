<?php

namespace pizza;

use pizza\PizzaInterface;
use pizza\Pizza;

abstract class PizzaWithToppingDecorator implements PizzaInterface
{
    public function __construct($pizza)
    {
        $this->pizza = $pizza;
    }

    public function cost()
    {
        throw new \Exception('Not Implemented');
    }

    public function description()
    {
        throw new \Exception('Not Implemented');
    }

    public function crust($style)
    {
        return $this->pizza->crust($style);
    }
}

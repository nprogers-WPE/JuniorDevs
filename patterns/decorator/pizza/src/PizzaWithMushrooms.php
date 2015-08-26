<?php

namespace pizza;

use pizza\PizzaInterface;
use pizza\Pizza;

class PizzaWithMushrooms extends PizzaWithToppingDecorator
{
    public function cost()
    {
        return ($this->pizza->cost() + 2);
    }

    public function description()
    {
        return ($this->pizza->description() . ' and mushrooms');
    }
}

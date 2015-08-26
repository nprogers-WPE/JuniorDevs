<?php

namespace pizza;

use pizza\PizzaInterface;
use pizza\Pizza;

class PizzaWithSausage extends PizzaWithToppingDecorator
{
    public function cost()
    {
        return ($this->pizza->cost() + 4);
    }

    public function description()
    {
        return ($this->pizza->description() . ' and sausage');
    }
}

<?php

namespace pizza;

use pizza\PizzaInterface;
use pizza\Pizza;

class PizzaWithPepperoni extends PizzaWithToppingDecorator
{
    public function cost()
    {
        return ($this->pizza->cost() + 4);
    }

    public function description()
    {
        return ($this->pizza->description() . ' and pepperoni');
    }
}

<?php

namespace pizza;

class Receipt
{

    private $pizzas = array();

    public function addPizza($pizza)
    {
        $this->pizzas[] = $pizza;
    }

    public function printReceipt()
    {
        foreach ($this->pizzas as $pizza) {
            $desc = $pizza->description();
            $cost = $pizza->cost();
            echo "$desc  ........... $ $cost" . PHP_EOL;
        }
    }
}

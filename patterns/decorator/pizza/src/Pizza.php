<?php

namespace pizza;

use pizza\PizzaInterface;

class Pizza implements PizzaInterface
{
    private $crust = 'hand tossed';

    public function cost()
    {
        return 10;
    }

    public function description()
    {
        return "A $this->crust pizza with cheese";
    }

    public function crust($style)
    {
        switch ($style) {
            case 3:
                $this->crust = 'New York style';
                break;
            case 2:
                $this->crust = 'thin crust';
                break;
            case 1:
            default:
                $this->crust = 'hand tossed';
                break;
        }
    }
}

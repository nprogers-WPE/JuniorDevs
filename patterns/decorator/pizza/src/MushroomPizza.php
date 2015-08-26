<?php

namespace pizza;

class MushroomPizza extends Pizza
{
    public function cost()
    {
        return 12;
    }

    public function description()
    {
        return 'A pizza with cheese and mushrooms';
    }
}

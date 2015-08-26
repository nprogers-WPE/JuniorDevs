<?php

namespace pizza;

class SausageMushroomPizza extends Pizza
{
    public function cost()
    {
        return 16;
    }

    public function description()
    {
        return 'A pizza with cheese and sausage and mushrooms';
    }
}

<?php

namespace pizza;

class SausagePizza extends Pizza
{
    public function cost()
    {
        return 14;
    }

    public function description()
    {
        return 'A pizza with cheese and sausage';
    }
}

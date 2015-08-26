<?php

namespace pizza;

interface PizzaInterface
{
    public function cost();
    public function description();
    public function crust($style);
}

<?php
#!/usr/bin/env php

namespace pizza;

require_once __DIR__ . '/../vendor/autoload.php';

use pizza\Receipt;
use pizza\Pizza;
use pizza\SausagePizza;
use pizza\SausageMushroomPizza;
use pizza\MushroomPizza;

echo "New order";
$order = new Receipt();

function parseToppings(array $toppings, $order)
{
    if (in_array(1, $toppings) && in_array(2, $toppings)) {
        $order->addPizza(
            new SausageMushroomPizza()
        );
    } elseif (in_array(1, $toppings)) {
        $order->addPizza(
            new SausagePizza()
        );
    } elseif (in_array(2, $toppings)) {
        $order->addPizza(
            new MushroomPizza()
        );
    } else {
        $order->addPizza(
            new Pizza()
        );
    }
}

$quit = false;
while (! $quit) {
    echo "Add a pizza [y/n]?  ";
    $response = trim(fgets(STDIN));
    switch ($response) {
        default:
            continue;
            break;
        case 'n':
            $quit = true;
            echo PHP_EOL . PHP_EOL . '----------------------------------------' . PHP_EOL . PHP_EOL;
            $order->printReceipt();
            echo PHP_EOL . PHP_EOL . '----------------------------------------' . PHP_EOL . PHP_EOL;
            break;
        case 'y':
            echo '[code] Available Toppings : [0] Cheese Only, [1] Sausage, [2] Mushrooms' . PHP_EOL;
            echo 'Enter topping codes separated by comma (,) : ';
            $toppings = trim(fgets(STDIN));
            $toppings = explode(',', $toppings);
            parseToppings($toppings, $order);
            continue;
            break;
    }
}

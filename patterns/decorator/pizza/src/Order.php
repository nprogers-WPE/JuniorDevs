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
    $pizza = new Pizza();

    foreach ($toppings as $topping) {
        switch ($topping) {
            case '1':
                $pizza = new PizzaWithSausage($pizza);
                break;
            case '2':
                $pizza = new PizzaWithMushrooms($pizza);
                break;
            case '3':
                $pizza = new PizzaWithPepperoni($pizza);
                break;
        }
    }

    $order->addPizza($pizza);
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
            echo '[code] Available Toppings : [0] Cheese, [1] Sausage, [2] Mushrooms, [3] Pepperoni' . PHP_EOL;
            echo 'Enter topping codes separated by comma (,) : ';
            $toppings = trim(fgets(STDIN));
            $toppings = explode(',', $toppings);
            parseToppings($toppings, $order);
            continue;
            break;
    }
}

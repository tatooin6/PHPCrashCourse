<?php

// show something on the screen
echo "Command Line \n";

$name = "Alice";

// Concatenation
echo "Hello, " . $name . "!\n";

// Operations

$pizzas = 3;

$slicesPerPizza = 8;

$totalNumberOfSlices = $pizzas * $slicesPerPizza;

// Implicit casting $totalNumberOfSlices from number to string on concatenation
echo "Total pizza slices: " . $totalNumberOfSlices . "\n";

$isHungry = false;

echo "Hungry?";

echo $isHungry ? "Yes" : "No";

echo "\n";

// type casting
echo "5" == 5;

echo "\n";
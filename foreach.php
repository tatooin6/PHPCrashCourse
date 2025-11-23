<?php

// associative arrays
$basket = [
    "Apple" => 3,
    "Banana" => 4
];

$total = 0;

// keys are optional, so this can be also:
// foreach ($basket as $quantity) {
foreach ($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $total += $quantity;
}

echo "Total Items: $total\n";
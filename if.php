<?php

$x = 10;

if ($x > 5) {
    echo "x is greater than 5.\n";
}

$score = 85;

if ($score >= 90) {
    echo "A\n";
} elseif ($score >= 80) {
    echo "B\n";
} elseif ($score >= 70) {
    echo "C\n";
} elseif ($score >= 70) {
    echo "D\n";
} else {
    echo "F\n";
}

$num = 150;

if ($num > 0) {
    if ($num % 2 == 0) {
        echo "\nPositive even number\n";
    } else {
        echo "\nPositive odd number\n";
    }
} else {
    echo "\nnon positive number\n";
}


$username = "admin";
$password = "password123";

if ($username == "admin" && $password == "password123") {
    echo "Success!\n";
} else {
    echo "At least one of the is wrong dude.\n";
}
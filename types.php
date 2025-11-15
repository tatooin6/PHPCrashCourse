<?php

$isStudent = 1;

echo "Type coercion with booleans:\n";
// prints not only value but also type
var_dump($isStudent, true, $isStudent == true,  $isStudent === true);

// every number that is non zero would be evaluated as true! wtf!

echo "Type coercion with floats:\n";

$scores = [85, "90", (int)"95.5"];

var_dump($scores);

var_dump($scores[0] + $scores[1] + 95.5);


// Special characters does not work with single quotes neither with printing variables inside
$total = $scores[0] + $scores[1] + 95.5;

echo "Total score is: $total \n";

// Control Structures

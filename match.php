<?php

$status = 300;

// * There is no Type Cohersion here, $status must match the type and value
// match returns a value => it can be defined as a statement
$message = match($status) {
    200, 201, 300 => 'Success',
    400, 404, 500 => 'Error',
    default => 'Unknown status'
};

// match introduced on PHP 8.0

echo "$message \n";
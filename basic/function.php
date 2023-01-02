<?php
declare(strict_types=1);

error_reporting();

function greet()
{
    return "Welcome to PHP World";
}

/*
 * dd = dump and die;
 * */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die;
}

function sum(int|float $number1, int|float $number2): int|float
{
    // if (is_numeric($number1) && is_numeric($number2)) {
    //     //
    //     return ($number1 + $number2);
    // }
    // throw new \Exception('Invalid value provided');

    // $result = $number1 + $number2;

    // return $result;
    return $number1 + $number2;
}


// $result = sum(2.5, 5);

// // dd($result);
// echo $result;
// echo "<br/>";
// echo sum($result, 6);

// echo greet();



function format_name(string $first, string $middle, string $last): string
{
    return $middle ? "$first $middle $last" : "$first $last";
}


$names = [
    'first' => 'John',
    'last' => 'Doe',
    'middle' => 'V.',
];

// pass by value vs pass by reference

// echo format_name(...$names); // spread operator

echo format_name($names['first'], $names['middle'], $names['last']);

// named parameters
echo format_name(
    middle: $names['middle'],
    first: $names['first'],
    last: $names['last'],
);

// Doe John V. -- Positioning
// John V. Doe -- Expected
<?php

// First question
// include vs require

// Next questions:
// include_once vs include
// require_once vs require

// include __DIR__ . './helpers.php';
include_once __DIR__ . './helpers.php';
// require_once __DIR__ . './helpers.php'; // red card
// require_once __DIR__ . './helpers.php'; // red card
// include __DIR__ . './helers.php'; // yellow card
// require __DIR__ . './helers.php'; // yellow card

// echo "<h2>Test message</h2>";

$exceptionNumberList = [5, 7];

$numbersList = [2,3,5,8,10,12,15]; // array of numbers

// dd($numbersList);

// find and print only even values from $numbersList array

// by using anonymous function / closure
$filteredArray = array_filter($numbersList, function ($number) use ($exceptionNumberList) {
    return in_array($number, $exceptionNumberList);
    // multi-line
});

// by using arrow function
// $filteredArray = array_filter($numbersList, fn ($number) => $number % 2 === 0);
$filteredArray = array_filter($numbersList, fn ($number) => in_array($number, $exceptionNumberList));
// $filteredArray = array_filter($numbersList, 'isEvenNumber');

// function isEvenNumber($value)
// {
//     return $value % 2 == 0; // check if the value is even // true / false
// }

dd($filteredArray);
// array_filter

// trim(' Jphm De   ');
// $namesArray = [' John Doe ', 'Jane Doe ', 'Kismat Ali   '];
// $filteredNames = array_map('trim', $namesArray);
// $filteredNames = array_filter($namesArray, function ($value) {
//     return trim($value);
// });
// dd($filteredNames);
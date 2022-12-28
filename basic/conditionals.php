<?php

// dataset
$gender = strtolower('Female');
$age = (int) '20';

// $person = [
//     'gender' => 'male',
//     'age' => 21
// ];


// if male, marriage year should be 21
// else if female, marriage year should be 18
// else, you are not eligible for marriage


// if ($gender == 'male' && $age >= 21) {
//     // you are eligible
//     echo "you are eligible";
// } elseif ($gender == 'female' && $age >= 18) {
//     // you are eligible
//     echo "you are eligible";
// } else {
//     // mamla hoye jabe..
//     echo "mamla hoye jabe kintu..";
// }

// const vs variable
$role = '';

if (isset($_GET['role'])) {
    $role = $_GET['role'];
}


// ternary operator
// $role = isset($_GET['role']) ? $_GET['role'] : '';
// $role = $_GET['role'] ?: ''; // short ternary

// null coalescing operator
// $role = $_GET['role'] ?? '';

const ADMIN = 'admin';
const STUDENT = 'student';


// for loop
// while loop
// do..while loop


// foreach loop -- DISCUSSION

switch ($role) {
    case ADMIN:
        // echo "test 1";
        $message = 'You are ' . ADMIN;
        break;
    case STUDENT:
        // echo "test 2";
        $message = 'You are ' . STUDENT;
        break;
    default:
        // echo "test 3";
        $message = 'Invalid input';
        break;
}

echo $message;
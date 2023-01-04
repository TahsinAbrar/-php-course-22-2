<?php

// $gpa = 0.0;

// switch (true) {
//     case ($gpa >= 4 && $gpa < 10):
//         $result = 'A+';
//         break;
//     case ($gpa >= 3.7 && $gpa < 4) == true:
//         $result = 'A';
//         break;
//     case ($gpa >= 3.5 && $gpa < 3.7) == true:
//         $result = 'A';
//         break;
//     default:
//         $result = 'F';
//         break;
// }

// echo $result;
// $gpa = 4;

// // var_dump(4);
// $status = match(true) {
//     $gpa == 5 => "A+",
//     $gpa >= 4 =>  "A",
//     $gpa >= 3.5 => "B",
//     $gpa >= 3 =>  "C",
//     $gpa >= 2 =>  "D",
//     $gpa == 0 =>  "F",
//     default => $gpa,
// };

// echo $status;

// $age = 23;

// $result = match (true) {
//     $age >= 65 => 'senior',
//     $age >= 25 => 'adult',
//     $age >= 18 => 'young adult',
//     default => 'kid',
// };

// var_dump($result);


try {
    $gpa = $_GET['gpa'] ?? throw new \Exception('Invalid input given');

    $status = match(true) {
        ($gpa > 0 && $gpa < 2) => "F",
        ($gpa >= 2 && $gpa < 3) =>  "D",
        ($gpa >= 3 && $gpa < 3.5) => "C",
        ($gpa >= 3.5 && $gpa < 4) =>  "B",
        ($gpa >= 4 && $gpa < 5) =>  "A",
        ($gpa == 5 || $gpa == 5.0) =>  "A+",
        // default => throw new \Exception('Invalid result'),
    };
    
    echo "Grade: " . $status . " and GPA: " . $gpa;
} catch (\UnhandledMatchError $e) {
    echo "The provided value is Invalid result";
} catch (\Exception $e) {
    echo $e->getMessage();
}



$statusCode = 400;
$message = match ($statusCode) {
    200, 300 => null,
    400 => 'not found',
    500 => 'server error',
    default => 'unknown status code',
};

echo $message;
<?php

// Array is a data type that hold similar types of data

// 3 types of array:
// indexed array
// associative array
// multi-dimensional array

/*
$array = array(
    2,
    'dhaka',
    4.5,
    false
);
echo "<pre>";
print_r($array[3]);
echo "</pre>";
die;
*/

// array key / array index

// $array = array(
//     2,
//     0 => 'dhaka',
//     4.5,
//     3 => true
// );

$array = array(
    'count' => 2,
    'city' => 'dhaka',
    'grade' => 4.5,
    'is_passed' => true
);

// $myEductionalDegrees = array();

// $myEductionalDegrees = [];

$array = [
    'count' => 2,
    'city' => 'dhaka',
    'educational_degrees' => [
        'ssc' => [
            'grade' => 4.5,
            'is_passed' => true
        ],
        'hsc' => [
            'grade' => 4.5,
            'is_passed' => true
        ],
        'bsc' => [
            'grade' => 3.4,
            'is_passed' => true
        ],
    ]
];


echo "<pre>";
var_dump($array['educational_degrees']);
// var_dump($array);
echo "</pre>";

$data = [
    'contact_info' => [
        'contact_name' => 'John Doe',
        'address' => '',
        'email' => '',
        'mobile' => ''
    ],

    'career_objective' => '',
    'educational_degrees' => [
        [
            'exam' => '',
            'board' => '',
            'year' => '',
            'institute' => '',
            'marks' => ''
        ],
        [
            'exam' => '',
            'board' => '',
            'year' => '',
            'institute' => '',
            'marks' => ''
        ],
        [
            'exam' => '',
            'board' => '',
            'year' => '',
            'institute' => '',
            'marks' => ''
        ],
    ]
];


echo $data['career_objective'];


// foreach loop

foreach($data['educational_degrees'] as $eduction) {
    echo $eduction['board'];
}


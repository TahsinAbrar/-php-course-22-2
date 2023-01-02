<?php
declare(strict_types=1);

error_reporting();

// isset vs empty

// isset === value is set
// empty == value is empty

$profile = [];

// $profile['name'] = "John Doe";

$value = 'TEST'; // is it empty? YES

echo "<pre>";
var_dump($value);
echo "</pre>";
die;

// echo "<br/>";

// echo $profile['age'];

if (isset($value)) {
    echo "Value is set. Checked with isset() function.";

    echo "<br/>";
    // echo "value: " . $profile['age'];
} else {
    echo "Nothing to print..";
}

// echo "<br/>";


// if (empty($profile)) {
//     echo "Value is empty. Checked with empty() function.";
//     // echo "<br/>";
//     // echo "value: " . $profile['name'];
// }

die;

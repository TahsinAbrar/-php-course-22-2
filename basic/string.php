<?php

$firstName = '    john   ';
$lastName = '   doe    ';

$fullName = trim($firstName) . " " . trim($lastName);

// echo $firstName . " " . $lastName; // string concatenation

// echo $fullName;

// echo "{$firstName} {$lastName}"; // string literal
// echo '$firstName $lastName';

// $text = "$firstName said, \"PHP is awesome\". 
// \"Of course.\" $lastName agreed.";

// echo $text;

// heredoc

// $text = <<<SAMPLE
// $firstName said "PHP is awesome".
// "Of course" $lastName agreed."
// ...........................
// ...........................
// ...........................
// ...........................
// SAMPLE;

// echo $text;


echo "Hey " . ucwords($fullName);

echo "<br/>\n";

// psr-12
echo "Length of the name: " . strlen($fullName);


<?php

// dataset:
$fruits = [
    'apple',
    'jackfruit',
    'mango'
];

$fruitsListString = implode('| ', $fruits);


// implode: Array to String convert
// explode: String to Array convert


// echo "<pre>";
// var_dump($fruitsListString);
// echo "</pre>";
// die;

// echo 'Fruits List: ' . $fruitsListString;
?>

<?php

$sports = "cricket, football, badminton, table tennis";

$sportsArray = explode(',', $sports);

// echo "<pre>";
// var_dump($sportsArray);
// echo "</pre>";
// die;


echo "<ul>";
foreach($sportsArray as $sport) {
    echo "<li>" . ucfirst(trim($sport)) . "</li>";
}
echo "</ul>";


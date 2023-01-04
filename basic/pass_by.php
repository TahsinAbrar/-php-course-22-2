<?php

// pass by value
function travelInfoByValue($country) {
    $country = "Togo"; // local scope
    // $GLOBALS['country'] = "Togo"; // local scope
}

// // pass by value
// $country = "costaRica"; // global scope

// //execute function
// travelInfoByValue($country); // nothing will print here.
// echo $country;

// pass by reference
function travelInfo(&$countryName) {
    // var_dump($countryName);
    // echo "<br/>";
    $countryName = "Togo";
}

$country = "costaRica"; // memory block

//execute function
travelInfo($country);
// $test = &$country;

// $test = 'rio';
echo $country;

// what will be print here?
<?php

// scope: global vs local scope




function printUsername()
{
    // local zone started
    // $username = 'JohnDoe'; // local scope
    // echo $username;
    // local zone closed

    // global $username; // pointing to global $username variable
    $GLOBALS["username"] = 'Test'; // global scope

    return $GLOBALS["username"];
}

$username = 'JeffyWay'; // global scope

echo $username; // JefryWay

echo "<br/>";

echo printUsername(); // Test

echo "<br/>";
echo $username; // Test



// echo $username1;

// JefryWay
// Test
// Test

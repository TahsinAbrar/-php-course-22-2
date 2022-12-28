<?php

// constant

// globally use-case

// runtime
if ($_GET['path'] === 'v1') {
    define("APP_VERSION", "1.0");
} else {
    define("APP_VERSION", "2.0");
}

// global scope

// local scope

echo PHP_VERSION;

// compile time
const MY_CONSTANT = 'Test data'; // best practice

// echo ONE;

// echo MY_CONSTANT;


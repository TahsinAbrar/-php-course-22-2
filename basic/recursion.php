<?php

function display($number) {
    if ($number <= 5) {
     echo "The number is: $number\n";

     display($number + 1);
    }

    // recursion stopped.
}

display(1);

// unless value is less than 5, print a message
// given that, our value is: 1



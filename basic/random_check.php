<?php

$array1 = ["a", "b", "c", "d", "e"]; // database query -- 2s // async
$array2 = ["b", "d", "e", "k"]; // http API call -- 6s // async

var_dump(array_diff($array1, $array2)); // 0.01s // sync
// show ["a", "c"]

// synchronus behave: total execution time: 2s + 6s + 0.01s = 8.01s


// asynchronus behave: execution time: 6.01s
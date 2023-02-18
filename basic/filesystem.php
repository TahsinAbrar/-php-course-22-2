<?php

// Magic constants
// echo 'Directory: ' .  __DIR__ . '<br/>';
// echo 'File Name: ' . __FILE__ . '<br/>'; // debugging
// echo 'Line Number: ' . __LINE__ . '<br/>'; // debugging

echo "<br/>";
// echo DIRECTORY_SEPARATOR;


$folder = 'test_folder';

// create directory
if (is_dir($folder)) {
    // echo "folder already exists" . '<br/>';
} else {
    // now we are safe, we can create this folder.
    mkdir($folder);
    echo 'new folder created' . '<br/>';
}

// image/file upload


// read file
$filePath = 'quotes/quotes.md';
// var_dump($filePath);
// $file = readfile($filePath);
$file = file_get_contents($filePath);
// $file = file_get_contents("https://reqres.in/api/users");
// var_dump($file); exit;
// $data = $file;
// $data = json_decode($file);


// object
// class
// stdClass

// print_r($data->data);
// print_r($data->page);
// exit;
// echo $data['page']


// file streaming

// open file
$handle = fopen($filePath, 'r');

// read the file
// echo fread($handle, filesize($filePath));
// echo fread($handle, 20);
// echo fread($handle, 20);
// echo fread($handle, 20);
// echo fread($handle, 20);
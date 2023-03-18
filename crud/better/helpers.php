<?php

function dd($content)
{
    echo "<pre>";
    var_dump($content);
    echo "</pre>";
    die;
}


function view_path()
{
    return __DIR__ . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR;
}

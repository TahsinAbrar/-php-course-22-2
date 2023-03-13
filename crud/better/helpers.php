<?php

function dd($content)
{
    var_dump($content);
    die;
}


function view_path()
{
    return __DIR__ . "./views/";
}
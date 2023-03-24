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

function checkPasswordStrength($password)
{
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/";

    return preg_match($pattern, $_POST['password']);
}
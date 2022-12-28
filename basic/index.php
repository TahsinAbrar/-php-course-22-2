<?php

echo "<h1>Hello PHP World</h1>";

echo "<br/>";

echo "result: " . 2+2;

function init() {
    // local scope
}


class MyClass
{
    // class local scope
    public const API_VERSION = '1.0';
}

echo MyClass::API_VERSION;

class MyAnotherClass
{
    public const API_VERSION = '2.0';
}

echo MyAnotherClass::API_VERSION;


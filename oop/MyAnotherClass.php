<?php

require_once __DIR__ . './MyClass.php';

class MyAnotherClass extends MyClass
{
    public function write()
    {
        return "my another world";
    }
}

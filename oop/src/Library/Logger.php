<?php
// declare(strict_types=1);

namespace Xplorer\PhpLearning\Library;

abstract class Logger
{
    public function __construct()
    {
        //
    }

    // abstract protected function showLogLevel();

    abstract public function log(string $type, string $message);

    public function welcomeLog()
    {
        return "hello log";
    }


}

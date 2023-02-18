<?php
declare(strict_types=1);

require_once __DIR__ . './Logger.php';

class DatabaseLogger extends Logger
{
    public $counter = 0;
    public const LOG_VIEWER = 'MyLogViewer';
    private $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;

        parent::__construct();
    }

    public function increaseLogCounter()
    {
        $this->counter++;
    }

    public function log($logType, $message)
    {
        $this->increaseLogCounter();

        return 'Driver: ' . ucfirst($this->driver) . ' - ' . strtoupper($logType) . ': '  . $message . ' ---- counter: ' . $this->counter . "<br/>";
    }

    public function showLogCounter()
    {
        return $this->counter;
    }

    public function showLogViewerName()
    {
        return self::LOG_VIEWER;
    }

    public function printWelcome()
    {
        return $this->welcomeLog();
    }

    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }

}
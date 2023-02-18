<?php
declare(strict_types=1);

namespace Xplorer\PhpLearning\Library;

// require_once __DIR__ . './Logger.php';
// require_once __DIR__ . './LoggerInterface.php';
// require_once __DIR__ . './LoggerTimeInterface.php';
// require_once __DIR__ . './SimpleLoggerTrait.php';

use Xplorer\PhpLearning\Library\Logger;
use Xplorer\PhpLearning\Library\LoggerInterface;
use Xplorer\PhpLearning\Library\LoggerTimeInterface;

final class FileLogger extends Logger implements LoggerInterface, LoggerTimeInterface
{
    use SimpleLoggerTrait;

    protected static $counter = 0;
    public const LOG_VIEWER = 'MyLogViewer';
    private string $driver;

    public function __construct(string $driver)
    // public function __construct(private string $driver)
    {
        $this->driver = $driver;

        // echo "New class instantiated... counter will be increased. <br/>";

        $this->increaseLogCounter();

        parent::__construct();
    }

    public function showLogTime()
    {
        //
    }

    public function increaseLogCounter()
    {
        self::$counter++;
    }

    public function log(string $logType, string $message)
    {
        $this->increaseLogCounter();

        return 'Driver: ' . ucfirst($this->driver) . ' - ' . strtoupper($logType) . ': '  . $message . ' ---- counter: ' . self::$counter . "<br/>";
    }

    public static function showLogCounter()
    {
        return self::$counter;
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
<?php
declare(strict_types=1);

require_once __DIR__ . './vendor/autoload.php';

use Xplorer\PhpLearning\Library\FileLogger;

// require_once __DIR__ . DIRECTORY_SEPARATOR . 'Library' . DIRECTORY_SEPARATOR . 'Logger.php';
// require_once __DIR__ . '/src/Library/Logger.php';
// require_once __DIR__ . './src/Library/FileLogger.php';
// require_once __DIR__ . './src/Library/LoggerInterface.php';
require_once __DIR__ . './MyClass.php';
require_once __DIR__ . './MyAnotherClass.php';

// $myClass = new MyClass();
// echo $myClass->write();

// echo "<br/>";

// $myClass = new MyAnotherClass();
// echo $myClass->write();

// Login vs Logging
// Log

// Logger

echo FileLogger::LOG_VIEWER;
echo "<br/>";

// $logger = new Logger();
// echo $logger->welcomeLog();
$logger = new FileLogger('file');

echo $logger->printWelcome();

echo "<br/>";

echo $logger->log('info', 'hello world');
echo $logger->log('error', 'something went wrong!');
echo $logger->log('warning', 'You account will be suspended within next 5 days if you do not pay');

echo "Total counter: " . FileLogger::showLogCounter();
// echo $logger->log('info', $logger->sum(4, 1));


echo "<br/>";
echo "-------------------------------------------------------------------------";
echo "<br/>";

$newLoggerObject = new FileLogger('file');
echo "<br/>";
echo $newLoggerObject->log('debug', 'debugging....');
echo $newLoggerObject->log('debug', 'debugging....');

echo "<br/>";
echo $newLoggerObject->showLogCounter();

echo "<br/>";
echo "-------------------------------------------------------------------------";
echo "<br/>";
echo $logger->log('info', 'hello world');

echo FileLogger::showLogCounter();

echo "<br/>";


echo "-------------------------------------------------------------------------";
echo "<br/>";
// echo $logger->displayLogLevel();
// echo $logger->showLogLevel();

// var_dump($testInterface);
<?php
class Logger
{
	use FileLogger, DatabaseLogger{
		DatabaseLogger::log as logToDatabase;
		FileLogger::log insteadof DatabaseLogger;
	}
}

$logger = new Logger();
$logger->log('this is a test message #1');
$logger->logToDatabase('this is a test message #2');
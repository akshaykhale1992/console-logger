<?php
use consoleLogger\Logger;

class LoggerTest extends PHPUnit\Framework\TestCase
{
    private $logger;

    public function setUp(): void
    {
        $this->logger = new Logger();
    }

    public function testPSR3()
    {
        $this->assertInstanceOf('Psr\Log\LoggerInterface', $this->logger);
    }
}

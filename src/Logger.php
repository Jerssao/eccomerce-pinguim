<?php

declare(strict_types=1);

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Level;

class Logger
{
    public function __construct(
        protected \Monolog\Logger $logger
    ) {
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../storage/logs/', Level::Warning));
    }

    public function write(string $message)
    {
        $this->logger->debug($message);
    }
}

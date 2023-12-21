<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

try {
    // Start dotEnv instance.
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . './../../');
    $dotenv->load();
} catch (\Throwable $th) {
    if ($_ENV['ENVIRONMENT'] != "production") {
        die($ths->getMessage());
    } else {
        $log = new Logger('App');
        $log->pushHandler(new StreamHandler(__DIR__ . './../../logs/errors.log', Logger::ERROR));

        $log->error($th->getMessage(), $th->getTrace());
    }
}

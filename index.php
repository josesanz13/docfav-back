<?php

include __DIR__ . '/vendor/autoload.php';

// Show errors
error_reporting(-1);
ini_set('display_errors', 1);

try {
    // Start Session
    session_start();

    echo "Run application";
} catch (\Throwable $th) {
}

<?php

error_reporting(E_ALL | E_STRICT);          // Turn on error reporting.
ini_set('display_errors', 1);               // Turn on error reporting.
ini_set('log_errors', 1);                   // Turn on error logging in file.
ini_set('log_errors_max_len', 0);           // Error message length. 0 (Unlimited).
ini_set('error_log', './02-error log.txt'); // Specifying file for logging errors.

/**
 * Xdebug Profiling example.
 */

// Slow execution function.
function slow()
{
    for ($i = 0; $i < 100000; $i++)
    {
    }
}

// Slow execution function - even more slower.

function slower()
{
    usleep(50000);
}

for ($i = 0; $i < 50; $i++)
{
    slow();
}
slower();

// XDEBUG_PROFILE=1

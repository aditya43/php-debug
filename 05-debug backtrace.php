<?php

error_reporting(E_ALL | E_STRICT);          // Turn on error reporting.
ini_set('display_errors', 1);               // Turn on error reporting.
ini_set('log_errors', 1);                   // Turn on error logging in file.
ini_set('log_errors_max_len', 0);           // Error message length. 0 (Unlimited).
ini_set('error_log', './02-error log.txt'); // Specifying file for logging errors.

/**
 * Debug Backtrace example.
 */

function funct_1($arg)
{
    funct_2($arg);
}

function funct_2($arg)
{
    funct_3($arg);
}

function funct_3($arg)
{
    var_dump(debug_backtrace());
}

funct_1('Aditya Testing');

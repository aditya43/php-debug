<?php

error_reporting(E_ALL | E_STRICT); // Turn on error reporting.
ini_set('display_errors', 1);      // Turn on error reporting.

ini_set('log_errors', 1);                   // Turn on error logging in file.
ini_set('log_errors_max_len', 0);           // Error message length. 0 (Unlimited).
ini_set('error_log', './01-error log.txt'); // Specifying file for logging errors.

echo $adi; // Triggering error by echoing non existing variable.

/**
 * Executing this file will log errors in 01-error log.txt file.
 */

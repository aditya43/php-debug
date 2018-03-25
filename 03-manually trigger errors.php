<?php

error_reporting(E_ALL | E_STRICT);          // Turn on error reporting.
ini_set('display_errors', 1);               // Turn on error reporting.
ini_set('log_errors', 1);                   // Turn on error logging in file.
ini_set('log_errors_max_len', 0);           // Error message length. 0 (Unlimited).
ini_set('error_log', './02-error log.txt'); // Specifying file for logging errors.

/**
 * Manually triggering errors.
 */

/*******************************************************************************/

// E_USER_NOTICE (default for "trigger_error" function)
# trigger_error('Aditya custom notice', E_USER_NOTICE); //Error!

/*******************************************************************************/

// E_USER_WARNING
# trigger_error('Aditya custom warning', E_USER_WARNING); //Error!

/*******************************************************************************/

// E_USER_ERROR
# trigger_error('Aditya custom error', E_USER_ERROR); //Error!

/*******************************************************************************/

echo 'This will not execute because of ##E_USER_ERROR## above. Its a fatal error.';

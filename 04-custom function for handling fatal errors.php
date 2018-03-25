<?php

error_reporting(E_ALL | E_STRICT);          // Turn on error reporting.
ini_set('display_errors', 1);               // Turn on error reporting.
ini_set('log_errors', 1);                   // Turn on error logging in file.
ini_set('log_errors_max_len', 0);           // Error message length. 0 (Unlimited).
ini_set('error_log', './02-error log.txt'); // Specifying file for logging errors.

/**
 * Custom function for handling "fatal" errors.
 */

register_shutdown_function('shutdown_notify');

function shutdown_notify()
{
    $error = error_get_last();

    if (!empty($error) && in_array($error['type'], [E_ERROR, E_USER_ERROR]))
    {
        echo '<h1>Custom error notify callback function is called.</h1>';
        /**
         * Send an email to admin notifying error description.
         */
        $to      = 'aditya43@gmail.com';
        $headers = 'From: adiinviter.emails73@gmail.com' . "\r\n" .
        'Reply-To: adiinviter.emails73@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $subject = "[{$_SERVER['SERVER_NAME']}] Fatal error in {$error['file']} on line {$error['line']}.";
        $message = var_export($error, true) . PHP_EOL;
        $message .= var_export($_SERVER, true) . PHP_EOL;

        # mail($to, $subject, $message, $headers); // This will send an email.
    }
}

trigger_error('Aditya custom notice', E_USER_NOTICE);   //Error!
trigger_error('Aditya custom warning', E_USER_WARNING); //Error!
trigger_error('Aditya custom error', E_USER_ERROR);     //Error!

<?php

error_reporting(E_ALL | E_STRICT);          // Turn on error reporting.
ini_set('display_errors', 1);               // Turn on error reporting.
ini_set('log_errors', 1);                   // Turn on error logging in file.
ini_set('log_errors_max_len', 0);           // Error message length. 0 (Unlimited).
ini_set('error_log', './02-error log.txt'); // Specifying file for logging errors.

/**
 * Triggering different types of errors.
 */

/*******************************************************************************/

// E_ERROR example - run out of memory.
ini_set('memory_limit', '1K');
# var_dump((object) range(0, 1000000)); // Error!

/*******************************************************************************/

// E_PARSE example - bad syntax.
# echo dassad // Error!

/*******************************************************************************/

// E_NOTICE example - typically accessing something undefined.
# var_dump($adi); // Error!

/*******************************************************************************/

// E_STRICT example - mixing scope.

class Adi
{
    public function trigger()
    {
        echo 'Triggered';
    }
}

# Adi::trigger(); // Error!

/*******************************************************************************/

// E_DEPRECATED example - something will be removed soon.
// -- New object by reference.
# $adi = & new stdClass(); // Error!
# var_dump($adi); // Error!

//-- Split function.
# var_dump(split(',', 'one,two,three')); // Error!

/*******************************************************************************/

ChromePHP
FirePHPCore
PHP_Debug
webgrind

/*******************************************************************************/

Types of Errors :
    - Notice : Non-fatal, probably needs improvements.
    - Warning : Non-fatal, but something is wrong and will probably cause errors.
    - Error : Fatal, and the program is terminated (crash).

/*******************************************************************************/

When PHP Problems Occur :
    * Compile Time
        - When the script is interpreted by the parser (no execution).
    * Run Time
        - During execution (Script interpreted correctly).

/*******************************************************************************/

Error Levels
    * "E_ERROR"
        - Fatal run-time error (crash/program execution halts).
    * "E_WARNING"
        - Run-time warning (program execution does not halt).
    * "E_PARSE"
        - Compile-time error (program execution halts even before it starts).
    * "E_NOTICE"
        - Run-time notice (program execution does not halt).
    * "E_STRICT"
        - Compile-time notice (program execution does not halt). Reinforces forward compatibility and best practices.
    * "E_DEPRECATED"
        - Run-time notice (program execution does not halt). Program will not run in future PHP versions.
    * "E_ALL"
        - Combines all errors, warnings and notices.
        - Excludes E_STRICT until PHP 5.4.

/*******************************************************************************/

Configuration : Errors And Displaying Errors

    * "error_reporting" : sets level.
        - set with constant (a bit field).
        - default : all except E_NOTICE and E_STRICT.
    * "display_errors" : displays errors to users.
        - 1 (on) or 0 (off).
        - default : 1 (on).

/*******************************************************************************/

"error_reporting" And "display_errors" Are Set In :
    * There are 4 places where error reporting and displaying can be set.
        1. php.ini
        2. httpd.conf
        3. htaccess
        4. run time (which is in the script itself).

/*******************************************************************************/

Turning On Error Reporting And Displaying :

<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
?>

/*******************************************************************************/

Error Logging Configuration :
    * "log_errors"
        - Toggles error logging.
        - default : 0 (off).
    * "log_errors_max_len"
        - Maximum length of an error message in bytes.
        - default : 1024 (bytes).
        - Set it to "0" for unlimited.
    * "error_log"
        - Path and filename of a log file.
        - default : NULL (Apache error log).

/*******************************************************************************/

Error Logging Best Practices :
    * Do not log PHP errors in Apache error logs.
    * Set error log file location out of web root.
        - example : /var/log/apache2/php_errors.log

/*******************************************************************************/

Turn Error Logging On :

<?php
error_reporting(E_ALL | E_STRICT); // Turn on error reporting.
ini_set('display_errors', 1);      // Turn on error reporting.

ini_set('log_errors', 1);                // Turn on error logging in file.
ini_set('log_errors_max_len', 0);        // Error message length. 0 (Unlimited).
ini_set('error_log', './error_log.txt'); // Specifying file for logging errors.
?>

/*******************************************************************************/

Trigger Error Manually :
    * There are following 3 user levels :
        - E_USER_NOTICE (default for "trigger_error" function)
        - E_USER_WARNING
        - E_USER_ERROR

/*******************************************************************************/

Custom Function For Handling Fatal Errors :
    * Check [04-custom function for handling fatal errors.php]

/*******************************************************************************/

Debug Backtrace :
    * backtrace : sequence of method and function calls up to point of generation
        - gives context
        - useful for debugging frameworks and nested structures
    * returns associative arrays keyed by frame (depth) in ascending order.
        - lowest number: last execution
        - each frame contains the function, line, file, class, object, args.
    * PHP cannot provide stack traces on fatal errors. Thats why use Xdebug.
    * Xdebug can provide stack traces of fatal errors.
    * Check [05-debug backtrace.php]

/*******************************************************************************/

Xdebug :
    * Supports stack and execution traces in error messages.
    * Profiling to find performance bottlenecks.
    * Remote debugging to "step" through execution.

/*******************************************************************************/

Xdebug Profiler :
    * Check [06-xdebug profiling.php]
    * To generate Xdebug Profile, simply pass following as query string parameter:
        - Query String : XDEBUG_PROFILE=1
        - Example : http://localhost/learn/php/aa.php?XDEBUG_PROFILE=1

/*******************************************************************************/

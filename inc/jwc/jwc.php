<?php

/** 
 * Wordpress Data Modelling 
 * 
 * wrappers for Wordpress entitites, which can be extended arbitrarily for custom builds.
 * 
 * @package jwc
 * @subpackage Wordpress
 * @version 1.0.0
 * 
 **/

// make an autoload function for the /jwc/Wordpress directory
spl_autoload_register(function ($class) {
    
    // Define the base directory for the namespace prefix
    $baseDir = __DIR__."/";

    // Project-specific namespace prefix
    $prefix = 'jwc\\Wordpress\\';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // If the class does not use the namespace prefix, move to the next registered autoloader
        return;
    }
    
    // strip jwc
    $class = str_replace('jwc\\', '', $class);
    
    // Replace the namespace prefix with the base directory, replace namespace separators with directory separators
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

// my debug function
function pre($data) {
    // Get the debug backtrace
    $debugBacktrace = debug_backtrace();
    // Get the line number from where pre() was called
    $line = $debugBacktrace[0]['line'];
    // Get the file name from where pre() was called
    $file = $debugBacktrace[0]['file'];

    echo "<pre>";
    echo "Called from $file on line $line\n";
    var_dump($data);
    echo "</pre>";
}

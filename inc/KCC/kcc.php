<?php



// make an autoload function for the /jwc/Wordpress directory
spl_autoload_register(function ($class) {
    
    // Define the base directory for the namespace prefix
    $baseDir = __DIR__."/";

    // Project-specific namespace prefix
    $prefix = 'KCC\\';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // If the class does not use the namespace prefix, move to the next registered autoloader
        return;
    }
    
    // strip jwc
    $class = str_replace('KCC\\', '', $class);
    
    // Replace the namespace prefix with the base directory, replace namespace separators with directory separators
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

$groups = new KCC\Groups();
$roles = new KCC\Roles();
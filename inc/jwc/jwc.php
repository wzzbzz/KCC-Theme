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


require __DIR__ . "/utilities.php";

class jwc
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'autoload'));

        add_shortcode('jwc', array($this, 'shortcode'));
    }

    function autoload($class)
    {

        // Define the base directory for the namespace prefix
        $baseDir = __DIR__ . "/";

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
    }

    function shortcode($atts, $content = null, $tag = ''){
        $o = "";
        
        $o .= do_shortcode("[TheOddsApi sport='basketball_nba' region='us' mkt='h2h' oddsFormat='decimal']");
        
        return $o;
    }
}

new jwc();

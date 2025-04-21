<?php


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
